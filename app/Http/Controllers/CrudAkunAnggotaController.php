<?php

namespace App\Http\Controllers;

use App\AnggotaModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CrudAkunAnggotaController extends Controller
{
    public  function tampil_data(){
    	$datas = AnggotaModel::all();         
    	return view('admin.halaman.CrudAkunAnggota',compact('datas'));     

    }
}
