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
}
