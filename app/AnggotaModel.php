<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnggotaModel extends Model
{
    public $timestamps = false;
	
    protected $table        = 'anggota'; // nama tabel 
    protected $primaryKey   = 'id_anggota'; // primary key tabel 
    protected $fillable     = ['username', 
    							'password', 
    							'nama_anggota', 
    							'ttl',
    							'jk',
    							'email',
    							'no_hp',
    							'alamat']; //field tabel 

    public function Kelas() {
        return $this->belongsToMany(KelasModel::class,'detail_kelas','id_anggota','id_kelas');//model_tabel_yang_mau_disambungin, nama_tabel_perantara, foreignkey1_pada_tabel_penghubung, foreignkey2_pada_tabel_penghubung)
    }
}
