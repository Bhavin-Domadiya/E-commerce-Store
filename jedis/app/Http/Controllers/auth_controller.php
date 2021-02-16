<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\client;
use Session;

class auth_controller extends Controller
{
    public function login(Request $req){
        $email = $req->input('email');;
        $pass = $req->input('pwd');;
        $data = client::select('id','fname')->where([['email','=',$email],['pass','=',$pass]])->get();
        $data_query = json_encode($data);
        if($data_query != "[]"){
            $client = $data[0]->fname;
            $req->session()->put('client',$client);    
            $req->session()->put('client_id',$data[0]->id);    

            if(Session::get('add_to_cart_login')){
                // auth::logout();
                // $data->session()->flush();

                // Session::flush();
                return redirect(Session::get('add_to_cart_login'));


            }else{
                return redirect('/');
            }
            
        }else{
            Session::flash('login-error', 'Email And Password combination wrong'); 
            return redirect('user-login');
            
        }
    }
    public function signup(Request $req){
        
        $req->input('fname');
        $client = new client;
        $client->fname = $req->input('fname');
        $client->lname = $req->input('lname');
        $client->email = $req->input('email');
        $client->mno = $req->input('cno');
        $client->pass = $req->input('pwd');
        $client->image = '';
        $client->address = $req->input('address');
        $client->save();
        $client_id = $client->id;
        $req->session()->put('client',$req->input('fname'));
        $req->session()->put('client_id',$client_id);
        return redirect('/');
    }

    public function logout(){
        Session::forget('client'); // Removes a specific variable
        Session::forget('client_id');
        return redirect('/');
    }
    public function login_form(){        
        return view('/auth/login');        
    }
}
