<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JadwalModel extends Model
{
    public $timestamps = false;
	
    protected $table        = 'jadwal'; // nama tabel 
    protected $primaryKey   = 'id_jadwal'; // primary key tabel 
    protected $fillable     = ['nama_jadwal', 
    							'hari',
    							'waktu',
    							'id_kelas']; //field tabel 

    public function Kelas() { //kelas dimiliki oleh jadwal
    	return $this->belongsTo(KelasModel::class,'id_kelas');
    }
}
