<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use App\Models\product;
use App\Models\cart;
use App\Models\cart_total_price;
use App\Models\contact;
use Session;

class product_controller extends Controller
{
    public function getData(){
      $pgdata = Product::paginate(9);
      return view('collection/shop', compact('pgdata'));
    }

    public function shop_page()
    {
        $data = product::select('id', 'pname', 'pimg', 'pprice')->get();
        return view('collection/shop', ['data' => $data]);
    }

    public function product_page($id)
    {
        $data = product::where('id', $id)->get();
        return view('products/product', ['data' => $data]);
    }

    public function manage_product()
    {
        $data = product::get();
        return view('admin/manage_product', ['data' => $data],);
    }

    public function manage_user()
    {
        return view('admin/manage_user');
    }


// =========================== Add_to_cart ===============================================
    public function Add_to_cart(Request $req)
    {
        $id = (int)$req->input('product_id');
        $price = product::select('pprice')->where('id', $id)->get();
        $price = $price[0]->pprice;

        $qty = (int)$req->input('quantity');
        $total_price = $price * $qty;
        $uid = Session::get('client_id');

        $check_id = cart::select('id', 'pid', 'pqty', 'pprice')->where([['uid', '=', $uid], ['pid', '=', $id]])->get();
        if ($uid) {
            if (json_encode($check_id) == '[]') {
                $db = new cart();
                $db->pid = $id;
                $db->uid = $uid;
                $db->pprice = $price;
                $db->pqty = $qty;
                $db->total_price = $total_price;
                $db->save();
            } else {
                $cart_id = (int)$check_id[0]->id;
                $qty2 = (int)$check_id[0]->pqty;
                $price = (float)$check_id[0]->pprice;
                $final_qty = $qty + $qty2;
                $final_price = $final_qty * $price;

                $db = cart::find($cart_id);
                $db->pqty = $final_qty;
                $db->total_price = $final_price;
                $db->save();
            }
            $this->update_total_price($uid);
            return redirect('cart');
        } else {
            $req->session()->put('add_to_cart_login','http://127.0.0.1:8000/product-page/'.$id);
            return redirect('user-login');
        }
    }

//  ================================ Update the cart ===================================
    public function Add_to_cart_ajax(Request $req)
    {
        $qty = $req->input('quantity');
        $cart_id = $req->input('cart__id');
        $uid = Session::get('client_id');
        $check_id = cart::select('id', 'pid', 'pqty', 'pprice')->where('id', $cart_id)->get();
        $price = (float)$check_id[0]->pprice;
        $final_qty = (int)$qty;
        $product_max_qty = product::select('pqty')->where('id', (int)$check_id[0]->pid)->get();
        $product_max_qty = $product_max_qty[0]->pqty;
        $final_price = $final_qty * $price;
        if ($final_qty > $product_max_qty) {
            Session::flash('outofstock', 'Product Is Out Of Stock');
            $this->update_total_price($uid);
        } else if ($final_qty == 0) {
            $this->remove_product_from_cart($cart_id);
            $this->update_total_price($uid);
        } else {
            $db = cart::find($cart_id);
            $db->pqty = $final_qty;
            $db->total_price = $final_price;
            $db->save();
            $this->update_total_price($uid);
        }
        return redirect('/cart');
    }

// ====================================Retrieves Cart Data=============================================

    public function cart_data()
    {
        $uid = Session::get('client_id');
        if ($uid) {
            $data = cart::where('uid', Session::get('client_id'))->get();
            $pid = cart::select('pid')->where('uid', Session::get('client_id'))->get();
            $total_product_price = cart_total_price::select('checkout_price')->where('uid', $uid)->get();
            $product_arr = [];
            $final_data = [];

            foreach ($pid as $item) {
                $pdata = product::select('id', 'pname', 'pimg')->where('id', $item->pid)->get();
                $pname = $pdata[0]->pname;
                $pimage = $pdata[0]->pimg;
                array_push($product_arr, ['pname' => $pname, 'pimage' => $pimage]);
            }

            for ($i = 0; $i < count($product_arr); $i++) {
                $pid = $data[$i]->pid;
                $title = $product_arr[$i]['pname'];
                $img = $product_arr[$i]['pimage'];
                $price = $data[$i]->pprice;
                $total_price = $data[$i]->total_price;
                $qty = $data[$i]->pqty;
                $cart_id = $data[$i]->id;
                array_push($final_data, ['cart_id' => $cart_id, 'pid' => $pid, 'title' => $title, 'img' => $img, 'price' => $price, 'total_price' => $total_price, 'qty' => $qty]);
            }

            return view('/cart/cart', ['data' => $final_data, 'total_price' => $total_product_price[0]->checkout_price]);
        } else {
            return view('/auth/login');
        }

    }


// ============================== Remove Product From Cart ===============================

    public function remove_product_from_cart($id)
    {
        cart::find($id)->delete();
        $uid = Session::get('client_id');
        $this->update_total_price($uid);
        return redirect('/cart');
    }

//================================ Update Total Price ======================================

    public function update_total_price($uid)
    {
        $data = cart::select('total_price')->where('uid', $uid)->get();
        $check = cart_total_price::select('id')->where('uid', $uid)->get();
        $total = [];

        foreach ($data as $item) {
            array_push($total, $item->total_price);
        }
        if (json_encode($check) == '[]') {
            $db = new cart_total_price();
            $db->uid = $uid;
            $db->checkout_price = array_sum($total);
            $db->save();
        } else {
            $db = cart_total_price::find($check[0]->id);
            $db->uid = $uid;
            $db->checkout_price = array_sum($total);
            $db->save();
        }
    }

//===================================== Checkout the cart data ========================================

        public function checkout_data(){
            $uid = Session::get('client_id');
            if($uid){
                $data = cart::where('uid',$uid)->get();
                $product_id = cart::select('pid')->where('uid',$uid)->get();
                $product_data_arr = [];
                for($i = 0; $i < count($product_id); $i++){
                    $product_data = product::select('id','pimg')->where('id',$product_id[$i]->pid)->get();
                    array_push($product_data_arr,['id'=>$product_data[0]->id,'pimg'=>$product_data[0]->pimg,'uid'=>$data[$i]['uid'],'total_price'=>$data[$i]['total_price'],'pqty'=>$data[$i]['pqty'],'cart_id' => $data[$i]['id']]);
                }
                $total_product_price = cart_total_price::select('checkout_price')->where('uid', $uid)->get();
                return view('/cart/checkout',['data'=>$product_data_arr,'total_price' => $total_product_price[0]->checkout_price]);
            }else{
                return redirect('/user-login');
            }
        }
// ===================================== Product Form ===========================================
    public function add_product_view()
    {
        $data = category::select('id', 'cname')->get();
       // print_r(json_encode($data));
       return view('admin/add_product', ['data' => $data]);
    }


//  ========================================  Add Product ==========================================
    public function add_product(Request $req)
    {
        $images = array();
        if ($files = $req->file('image')) {
            foreach ($files as $file) {
                $name = $file->getClientOriginalName();
                $ext = $file->getClientOriginalExtension();
                $name = time() . rand() . '.' . $ext;
                $file->move('assets/images', $name);
                $images[] = $name;
            }
        }
        /*Insert your data*/
        $db = new product();
        $db->cname = $req->input('category');
        $db->pname = $req->input('pname');
        $db->pprice = (float)$req->input('price');
        $db->pqty = $req->input('qty');
        $db->pdesc = $req->input('desc');
        $db->pimg = implode("|", $images);
        $db->save();

        Session::flash('product-add', 'Product Added Successfully');
        return redirect('manage-product');
    }

//  ============================== Edit Product ========================================================
    public function edit_product_form(Request $req, $id)
    {
        $data = product::where('id', $id)->get();
        return view('admin/edit_product', ['data' => $data]);
    }

//  =================================== Update Product =================================================
    public function edit_product(Request $req)
    {
        $images = array();
        if ($files = $req->file('image')) {
            foreach ($files as $file) {
                $name = $file->getClientOriginalName();
                $ext = $file->getClientOriginalExtension();
                $name = time() . rand() . '.' . $ext;
                $file->move('assets/images', $name);
                $images[] = $name;
            }
            $image_list = implode("|", $images);

            // --------------Get prev images----------------
            $total_img = $req->input('total_prev_image');
            $img_arr = explode(',', $total_img);
            $images_prev = [];
            for ($i = 0; $i < count($img_arr); $i++) {
                array_push($images_prev, $req->input('image' . $img_arr[$i]));
            }
            $image_list2 = implode("|", $images_prev);

            // -------------------combine both images-------------------
            if ($image_list2) {
                $images_final = $image_list . "|" . $image_list2;
            } else {
                $images_final = $image_list;
            }

        } else {
            $total_img = $req->input('total_prev_image');
            $img_arr = explode(',', $total_img);
            $images_arr = [];
            print_r($img_arr);
            for ($i = 0; $i < count($img_arr); $i++) {
                array_push($images_arr, $req->input('image' . $img_arr[$i]));
            }
            $images_final = implode("|", $images_arr);
        }
        // echo $images_final;
        /*Insert your data*/
        $db = product::find($req->input('product_id'));
        cart::where('pid',$req->input('product_id'))->update(array('pprice'=>(float)$req->input('price')));
        $db->cname = $req->input('category');
        $db->pname = $req->input('pname');
        $db->pprice = (float)$req->input('price');
        $db->pqty = $req->input('qty');
        $db->pdesc = $req->input('desc');
        $db->pimg = $images_final;
        $db->save();

        Session::flash('product-add', 'Product Edited Successfully');
        return redirect('manage-product');
    }

// ===================================Delete Product=============================================
    public function delete_product(Request $req, $id)
    {
        $delete_id = $id;
        $images = product::select('pimg')->where('id', $id)->get();
        $img_arr = explode('|', $images[0]->pimg);
        foreach ($img_arr as $img) {
            if (file_exists('assets/images/' . $img)) {
                unlink('assets/images/' . $img);
                Session::flash('product-remove', 'Product Removed Successfully');
            } else {
                Session::flash('product-add', 'Somehing Went Wrong Please Try Again Later');
            }
        }
        $data = product::find($delete_id)->delete();
        return redirect('manage-product');
    }
    // ============================================== Thankyou Page ===================================================

    public function thankyou_page(){
        $uid = Session::get('client_id');
        $data = cart::select('pid','pqty')->where('uid',$uid)->get();
        foreach ($data as $item){
            $qty =  $item->pqty;
            $pid = $item->pid;
            $product_data = product::select('id','pqty')->where('id',$pid)->get();
            $final_qty = (int)$product_data[0]->pqty - (int)$qty;
            $db = product::find($product_data[0]->id);
            $db->pqty = $final_qty;
            $db->save();
        }
        cart::select('pid','pqty')->where('uid',$uid)->delete();
        return view('/cart/thankyou');
    }

    // ============================================== Contact          ===================================================

    public function contact_data(Request $req){
        $name = $req->input('name');
        $email = $req->input('email');
        $subject = $req->input('subject');
        $message = $req->input('message');

        $db = new contact();
        $db->name = $name;
        $db->email = $email;
        $db->subject = $subject;
        $db->message = $message;
        $db->save();
        // return redirect('contact');
        echo 'Thanks For Connecting Us';
    }
}



