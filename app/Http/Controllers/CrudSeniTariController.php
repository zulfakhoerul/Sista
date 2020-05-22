<?php

namespace App\Http\Controllers;

use App\SeniTariModel;
use Illuminate\Http\Request;

class CrudSeniTariController extends Controller
{
    public  function tampil_data(){
    	$datas = SeniTariModel::all();         
    	return view('admin.halaman.CrudSeniTari',compact('datas'));     

    }

    public function tambah() {
        return view('admin.halaman.tambah_data.TambahSeniTari');
    }

    public function store( Request $request) {
        $this->validate($request, [
            'nama' => 'required'    
        ]);

        $data = new SeniTariModel();
        $data->nama_seni_tari = $request->nama;
        
        $data->save();
        return redirect('admin/CrudSeniTari')->with('alert-success','Data berhasil ditambah!');
    }
    
    public function ubah($id_seni_tari) {
        $datas = SeniTariModel::find($id_seni_tari);
        return view('admin.halaman.ubah_data.UbahSeniTari',compact('datas'));
    }

    public function update($id_seni_tari, Request $request) {
        $this->validate($request, [
            'nama' => 'required'
        ]);

        $data = SeniTariModel::find($id_seni_tari);
        $data->nama_seni_tari = $request->nama;
        $data->save();
        return redirect('admin/CrudSeniTari')->with('alert-success','Data berhasil diubah!');
    }

    public function delete($id_seni_tari) {
        $datas = SeniTariModel::find($id_seni_tari);
        $datas->delete();
        return redirect('admin/CrudSeniTari')->with('alert-success','Data berhasil dihapus!');
    }
}
