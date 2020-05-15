<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelAdmin;
use Hash;
use Session;

class Admin extends Controller
{
    public function index(){
        if(!Session::get('/admin/loginadmin')){
            return redirect('/admin/loginadmin')->with('alert','Kamu harus login dulu');
        }
        else{
            return view('/admin/DashboardAdmin');
        }
    }

    public function login(){
        return view('/admin/loginadmin');
    }

    public function loginPost(Request $request){

        $username = $request->username;
        $password = $request->password;

        $data = ModelAdmin::where('username',$username)->first();
        if($data){ //apakah email tersebut ada atau tidak
            if(Hash::check($password,$data->password)){
                Session::put('nama_admin',$data->nama_admin);
                Session::put('username',$data->username);
             
                Session::put('/admin/loginadmin',TRUE);
                return redirect('/admin/DashboardAdmin');
            }
            else{
                return redirect('/admin/loginadmin')->with('alert','Password atau Email, Salah !');
            }
        }
        else{
            return redirect('/admin/loginadmin')->with('alert','Password atau Email, Salah!');
        }
    }

    public function logout(){
        Session::flush();
        return redirect('/admin/loginadmin')->with('alert','Kamu sudah logout');
    }

    public function register(Request $request){
        return view('/admin/registeradmin');
    }

    public function registerPost(Request $request){
        $this->validate($request, [
            'nama_admin' => 'required|min:4',
            'username' => 'required|min:4',
            'password' => 'required',
            'confirmation' => 'required|same:password',
            
        ]);

        $data =  new ModelAdmin();
        $data->nama_admin = $request->nama_admin;
        $data->username = $request->username;
        $data->password = bcrypt($request->password);
        
        $data->save();
        return redirect('/admin/loginadmin')->with('alert-success','Kamu berhasil Register');
    }// */
}
