<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelPendaftaran;
use Hash;
use Session;

class AnggotaController extends Controller
{
    public function index(){
        if(!Session::get('loginAnggota')){
            return redirect('/anggota/loginAnggota')->with('alert','Kamu harus login dulu');
        }
        else{
            return view('/anggota/DashboardAnggota');
        }
    }

    public function loginAnggota(){
        return view('/anggota/loginAnggota');
    }

    public function loginAnggotaPost(Request $request){

        $email = $request->email;
        $password = $request->password;

        $data = ModelPendaftaran::where('email',$email)->first();
        if($data){ //apakah email tersebut ada atau tidak
            if(Hash::check($password,$data->password)){
                Session::put('nama',$data->nama);
                Session::put('tanggal_lahir',$data->tanggal_lahir);
                Session::put('alamat',$data->alamat);
                Session::put('tempat_lahir',$data->tempat_lahir);
                Session::put('no_hp',$data->no_hp);
                Session::put('pekerjaan',$data->pekerjaan);
                Session::put('jenis_kelamin',$data->jenis_kelamin);
                Session::put('jenis_dance',$data->jenis_dance);
                Session::put('email',$data->email);
                
                Session::put('loginAnggota',TRUE);
                return redirect('/anggota/DashboardAnggota');
            }
            else{
                return redirect('/anggota/loginAnggota')->with('alert','Password atau Email, Salah !');
            }
        }
        else{
            return redirect('/anggota/loginAnggota')->with('alert','Password atau Email, Salah!');
        }
    }

    public function logoutAnggota(){
        Session::flush();
        return redirect('/anggota/loginAnggota')->with('alert','Kamu sudah logout');
    }

    
}
