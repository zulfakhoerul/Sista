<?php

namespace App\Http\Controllers;

use App\AdminModel;
use Illuminate\Http\Request;

class CrudAkunAdminController extends Controller
{
    public  function tampil_data(){
    	$datas = AdminModel::all();         
    	return view('admin.halaman.CrudAkunAdmin',compact('datas'));     

    }
}
