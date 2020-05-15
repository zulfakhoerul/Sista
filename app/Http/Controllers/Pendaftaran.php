<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelPendaftaran;
use Hash;
use Session;

class Pendaftaran extends Controller
{
    
    public function pendaftarann(Request $request){
        return view('pendaftarann');
    }

    public function pendaftarannPost(Request $request){
        $this->validate($request, [
            'nama' => 'required|min:4',
            'tanggal_lahir' => 'required|min:4',
            'alamat' => 'required|min:4',
            'tempat_lahir' => 'required|min:4',
            'no_hp' => 'required|min:4',
            'pekerjaan' => 'required|min:4',
            'jenis_kelamin' => 'required|min:4',
            'jenis_dance' => 'required|min:4',

            'email' => 'required|min:4',
            'password' => 'required',
            'confirmation' => 'required|same:password',
         
        ]);

        $data =  new ModelPendaftaran();
        $data->nama = $request->nama;
        $data->tanggal_lahir = $request->tanggal_lahir;
        $data->alamat = $request->alamat;
        $data->tempat_lahir = $request->tempat_lahir;
        $data->no_hp = $request->no_hp;
        $data->pekerjaan = $request->pekerjaan;
        $data->jenis_kelamin = $request->jenis_kelamin;
        $data->jenis_dance = $request->jenis_dance;

        $data->email = $request->email;
        $data->password = ($request->password);
     
        $data->save();
        return redirect('/pendaftarann')->with('alert-success','Kamu berhasil Register');
    } //bycript
}
