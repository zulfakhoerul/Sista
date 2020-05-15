<?php

namespace App\Http\Controllers;

use App\ModelAdmin;
use App\ModelUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CrudAkunUserController extends Controller
{
    public function index(){
    	
    	if(!Session::get('login')){
    		return redirect('LoginAdmin')->with('alert','Maaf Anda Harus Login');
    	} else {
    		return view('admin.halaman.CrudAkunUser');
    	}
    }

    public function tambah() {
        return view('admin.halaman.tambah_data.TambahAkunUser');
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
    public  function tampil_data(){
    	$datas = ModelUser::all();         
    	return view('admin.halaman.CrudAkunUser',compact('datas'));     

    }

    public function ubah($id_user) {
        $datas = ModelUser::find($id_user);
        return view('admin.halaman.ubah_data.UbahAkunUser',compact('datas'));
    }

    public function update($id_user, Request $request) {
        $this->validate($request, [
            'nama' => 'required',
            'username' => 'required',
            'password' => 'required|min:8',
            /*'email' => 'required|unique:user',*/ 
            'no_hp' => 'required', 
            'alamat' => 'required'
        ]);

        $data = ModelUser::find($id_user);
        $data->nama_user = $request->nama;
        $data->username = $request->username;
        $data->password = bcrypt($request->password);
        /*$data->email = $request->email;*/
        $data->no_hp = $request->no_hp;
        $data->alamat = $request->alamat;
        $data->save();
        return redirect('CrudAkunUser');
    }

    public function delete($id_user) {
        $datas = ModelUser::find($id_user);
        $datas->delete();
        return redirect('CrudAkunUser');
    }

}
