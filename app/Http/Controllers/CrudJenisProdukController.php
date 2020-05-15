<?php

namespace App\Http\Controllers;

use App\JenisProdukModel;
use Illuminate\Http\Request;

class CrudJenisProdukController extends Controller
{
    public  function tampil_data(){
    	$datas = JenisProdukModel::all();         
    	return view('admin.halaman.CrudJenisProduk',compact('datas'));     

    }
}
