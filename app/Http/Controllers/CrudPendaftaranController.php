<?php

namespace App\Http\Controllers;

use App\PendaftaranModel;
use App\SeniTariModel;
use Illuminate\Http\Request;

class CrudPendaftaranController extends Controller
{
    public function tampil_data() {
    	$datas = PendaftaranModel::all();
    	$pilihsenitari = SeniTariModel::all();
    	return view('admin.halaman.CrudPendaftaran',compact('datas','pilihsenitari')); 
    }
}
