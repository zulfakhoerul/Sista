<?php

namespace App\Http\Controllers;

use App\ProdukModel;
use Illuminate\Http\Request;

class CrudProdukController extends Controller
{
    public  function tampil_data(){

    	$datas = ProdukModel::all();         
    	return view('admin.halaman.CrudProduk',compact('datas'));     

    } 
    public function tambah() {
        return view('admin.halaman.tambah_data.TambahProduk');
    }

    public function store( Request $request) {
        $this->validate($request, [
            'nama' => 'required',
            'username' => 'required|unique:user',
            'password' => 'required|min:8',
            'email' => 'required|unique:user', 
            'no_hp' => 'required', 
            'alamat' => 'required'
        ]);

        $data = new ModelUser();
        $data->nama_user = $request->nama;
        $data->username = $request->username;
        $data->password = bcrypt($request->password);
        $data->email = $request->email;
        $data->no_hp = $request->no_hp;
        $data->alamat = $request->alamat;
        $data->save();
        return redirect('CrudAkunUser');
    }
}
