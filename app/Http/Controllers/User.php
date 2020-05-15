<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelUser;
use Hash;
use Session;

class User extends Controller
{
    public function index(){
        if(!Session::get('login')){
            return redirect('/')->with('alert','Kamu harus login dulu');
        }
        else{
            return view('/user/home_user');
        }
    }

    public function loginUser(){
        return view('/');
    }

    public function loginUserPost(Request $request){

        $email = $request->email;
        $password = $request->password;

        $data = ModelUser::where('email',$email)->first();
        if($data){ //apakah email tersebut ada atau tidak
            if(Hash::check($password,$data->password)){
                Session::put('email',$data->email);
                Session::put('username',$data->username);
                Session::put('nama_user',$data->nama_user);
                
                Session::put('no_hp',$data->no_hp);
                Session::put('alamat',$data->alamat);
                Session::put('login',TRUE);
                return redirect('/user/home_user');
            }
            else{
                return redirect('/')->with('alert','Password atau Email, Salah !');
            }
        }
        else{
            return redirect('/')->with('alert','Password atau Email, Salah!');
        }
    }

    public function logoutUser(){
        Session::flush();
        return redirect('/')->with('alert','Kamu sudah logout');
    }

    public function registerUser(Request $request){
        return view('user/pendaftaran_user');
    }

    public function registerUserPost(Request $request){
        $this->validate($request, [
            'email' => 'required|min:4',
            'username' => 'required|min:4',
            'password' => 'required',
            'confirmation' => 'required|same:password',
            'nama_user' => 'required|min:4',
            
            'no_hp' => 'required|min:4',
            'alamat' => 'required|min:4',
        ]);

        $data =  new ModelUser();
        $data->email = $request->email;
        $data->username = $request->username;
        $data->password = bcrypt($request->password);
        $data->nama_user = $request->nama_user;
        
        $data->no_hp = $request->no_hp;
        $data->alamat = $request->alamat;
        $data->save();
        return redirect('/')->with('alert-success','Kamu berhasil Register');
    }// */
}
