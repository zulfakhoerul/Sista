<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PendaftaranModel extends Model
{
	public $timestamps = false;

    protected $table        = 'pendaftaran'; // nama tabel 
    protected $primaryKey   = 'id_pendaftaran'; // primary key tabel 
    protected $fillable     = ['nama_pendaftar',
    							'username',
    							'password',
    							'email',
    							'ttl',
    							'jk',
    							'no_hp',
    							'alamat',
                                'status',
    							'id_user']; //field tabel 

    public function SeniTari() {
    	return $this->belongsToMany(SeniTariModel::class,'detail_pendaftaran','id_pendaftaran','id_seni_tari');//model_tabel_yang_mau_disambungin, nama_tabel_perantara, foreignkey1_pada_tabel_penghubung, foreignkey2_pada_tabel_penghubung)
    }
}
