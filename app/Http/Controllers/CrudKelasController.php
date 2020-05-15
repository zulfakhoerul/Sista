<?php

namespace App\Http\Controllers;

use App\KelasModel;
use Illuminate\Http\Request;

class CrudKelasController extends Controller
{
    public  function tampil_data(){

    	$datas = KelasModel::all();     
    	return view('admin.halaman.CrudKelas',compact('datas'));     

    } 
}
