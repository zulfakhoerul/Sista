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

    public function Anggota() {
        return $this->belongsToMany(AnggotaModel::class,'detail_kelas','id_anggota','id_kelas');//model_tabel_yang_mau_disambungin, nama_tabel_perantara, foreignkey1_pada_tabel_penghubung, foreignkey2_pada_tabel_penghubung)
    }
}
