<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KelasModel extends Model
{
    public $timestamps = false;
	
    protected $table        = 'kelas'; // nama tabel 
    protected $primaryKey   = 'id_kelas'; // primary key tabel 
    protected $fillable     = ['nama_kelas', 
    							'id_seni_tari']; //field tabel 

    public function SeniTari() { 
    	return $this->belongsTo(SeniTariModel::class,'id_seni_tari');
    	//nama_modelTabelrelasinya,foreignkey di tabel kelas
    }

    public function Jadwal() { //setiap jadwal memiliki 1 kelas
    	return $this->hasOne(JadwalModel::class,'id_kelas');
    	//nama_modelTabelrelasinya,foreignkey di tabel jadwal
    }
}
