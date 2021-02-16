<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use App\Models\admin;

class admin_controller extends Controller
{
    public function login(Request $req){
        $email = $req->input('email');;
        $pass = $req->input('pwd');;
        $data = admin::select('id','name')->where([['email','=',$email],['pass','=',$pass]])->get();
        $data_query = json_encode($data);
        if($data_query != "[]"){
            $admin = $data[0]->name;
            $req->session()->put('admin',$admin);       
            return redirect('admin-panel');
        }else{
            Session::flash('admin-login-error', 'Email And Password combination wrong'); 
            return redirect('admin-login');
        }
    }

    public function logout(){
        Session::forget('admin'); // Removes a specific variable
        return redirect('/');
    }
}
