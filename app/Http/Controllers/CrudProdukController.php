<?php

namespace App\Http\Controllers;

use App\ProdukModel;
use App\JenisProdukModel;
use App\SeniTariModel;
use Illuminate\Http\Request;

class CrudProdukController extends Controller
{
    public function tampil_data(){

    	$datas = ProdukModel::all();         
    	return view('admin.halaman.CrudProduk',compact('datas'));     

    } 

    public function pilihan(){
        $SeniTaris = SeniTariModel::all(); 
        $JenisProduks = JenisProdukModel::all();
                
        return view('admin.halaman.tambah_data.TambahProduk',compact('SeniTaris','JenisProduks')); 
    }

    public function tambah() {
        return view('admin.halaman.tambah_data.TambahProduk');
    }

    public function store( Request $request) {
        $this->validate($request, [
            'nama_produk' => 'required',
            'harga' => 'required:',
            'stok' => 'required',
            'jenis_produk' => 'required', 
            'seni_tari' => 'required', 
            'gambar_produk' => 'required'
        ]);

        $file = $request->file('gambar_produk'); // menyimpan data gambar yang diupload ke variabel $file
        $nama_file = time()."_".$file->getClientOriginalName();
        $file->move('img/produk',$nama_file); // isi dengan nama folder tempat kemana file diupload

        $data = new ProdukModel();
        $data->nama_produk = $request->nama_produk;
        $data->harga = $request->harga;
        $data->stok = $request->stok;
        $data->id_jenis_produk = $request->jenis_produk;
        $data->id_seni_tari = $request->seni_tari;
        $data->gambar_produk = $nama_file;

        $data->save();
        return redirect('admin/CrudProduk')->with('alert-success','Data berhasil ditambahkan !');
    }

    public function ubah($id_produk) {
        $datas = ProdukModel::find($id_produk);
        $UpdateSeniTaris = SeniTariModel::all(); 
        $UpdateJenisProduks = JenisProdukModel::all();
        return view('admin.halaman.ubah_data.UbahProduk',compact('datas','UpdateSeniTaris','UpdateJenisProduks'));
    }

    public function update(Request $request, $id_produk)
    {
        $this->validate($request, [
            'nama_produk' => 'required',
            'harga' => 'required:',
            'stok' => 'required',
            'jenis_produk' => 'required', 
            'seni_tari' => 'required', 
            'gambar_produk' => 'nullable'
        ]);

        $updt = ProdukModel::find($id_produk);
        $updt->nama_produk = $request->nama_produk;
        $updt->harga = $request->harga;
        $updt->stok = $request->stok;
        $updt->id_jenis_produk = $request->jenis_produk;
        $updt->id_seni_tari = $request->seni_tari;

        if (empty($request->gambar_produk)){
            $updt->gambar_produk = $updt->gambar_produk;
        }
        else{
            unlink('img/produk/'.$updt->gambar_produk); //menghapus file lama
            $file = $request->file('gambar_produk'); // menyimpan data gambar yang diupload ke variabel $file
            $nama_file = time()."_".$file->getClientOriginalName();
            $file->move('img/produk',$nama_file); // isi dengan nama folder tempat kemana file diupload
            $updt->gambar_produk = $nama_file;

        }
        $updt->save();
        return redirect('admin/CrudProduk')->with('alert-success','Data berhasil diubah!');
    }

    public function delete($id_produk)
    {
        $hapus = ProdukModel::find($id_produk);
        $hapus->delete();
        return redirect('admin/CrudProduk')->with('alert-success','Data berhasil dihapus!');
    }
}
