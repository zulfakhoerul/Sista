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
            return view('home_user');
        }
    }

    public function login(){
        return view('/');
    }

    public function loginPost(Request $request){

        $email = $request->email;
        $password = $request->password;

        $data = ModelUser::where('email',$email)->first();
        if($data){ //apakah email tersebut ada atau tidak
            if(Hash::check($password,$data->password)){
                Session::put('username',$data->username);
                Session::put('nama_user',$data->nama_user);
                Session::put('email',$data->email);
                Session::put('no_hp',$data->no_hp);
                Session::put('alamat',$data->alamat);
                Session::put('login',TRUE);
                return redirect('home_user');
            }
            else{
                return redirect('/')->with('alert','Password atau Email, Salah !');
            }
        }
        else{
            return redirect('/')->with('alert','Password atau Email, Salah!');
        }
    }

    public function logout(){
        Session::flush();
        return redirect('/')->with('alert','Kamu sudah logout');
    }

    public function register(Request $request){
        return view('register');
    }

    public function registerPost(Request $request){
        $this->validate($request, [
            'username' => 'required|min:4',
            'password' => 'required',
            'confirmation' => 'required|same:password',
            'nama_user' => 'required|min:4',
            'email' => 'required|min:4|email|unique:user',
            'no_hp' => 'required|min:4',
            'alamat' => 'required|min:4',
        ]);

        $data =  new ModelUser();
        $data->username = $request->username;
        $data->password = bcrypt($request->password);
        $data->nama_user = $request->nama_user;
        $data->email = $request->email;
        $data->no_hp = $request->no_hp;
        $data->alamat = $request->alamat;
        $data->save();
        return redirect('/')->with('alert-success','Kamu berhasil Register');
    }// */
}
