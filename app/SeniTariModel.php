<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SeniTariModel extends Model
{
	public $timestamps = false;

    protected $table        = 'seni_tari'; // nama tabel 
    protected $primaryKey   = 'id_seni_tari'; // primary key tabel 
    protected $fillable     = ['nama_seni_tari']; //field tabel 

    public function Kelas() { //banyak kelas memiliki 1 seni tari
    	return $this->hasMany(KelasModel::class);
    }

    public function Produk() { //banyak produk memiliki 1 seni tari
        return $this->hasMany(ProdukModel::class);
    }

    public function Pendaftaran() {
        return $this->belongsToMany(PendaftaranModel::class,'detail_pendaftaran','id_pendaftar');
    }
}
