<?php

namespace App\Http\Controllers;

use App\JadwalModel;
use Illuminate\Http\Request;

class CrudJadwalController extends Controller
{
    public  function tampil_data(){
    	$datas = JadwalModel::all();         
    	return view('admin.halaman.CrudJadwal',compact('datas'));     

    }
}
