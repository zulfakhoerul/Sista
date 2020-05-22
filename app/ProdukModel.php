<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProdukModel extends Model
{
    public $timestamps = false;
	
    protected $table        = 'produk'; // nama tabel 
    protected $primaryKey   = 'id_produk'; // primary key tabel 
    protected $fillable     = ['nama_produk', 
    							'harga',
    							'stok',
                                'gambar_produk',
    							'id_jenis_produk',
    							'id_seni_tari']; //field tabel 
    
    public function JenisProduk() { //jenis produk dimiliki oleh produk
        return $this->belongsTo(JenisProdukModel::class,'id_jenis_produk');
        //nama_modelTabelrelasinya,foreignkey di tabel produk
    }

    public function SeniTari() { //seni tari dimiliki oleh produk
        return $this->belongsTo(SeniTariModel::class,'id_seni_tari');
        //nama_modelTabelrelasinya,foreignkey di tabel produk
    }

    public function Penyewaan() {
        return $this->belongsToMany(PenyewaanModel::class,'detail_penyewaan','id_penyewaan','id_produk');//model_tabel_yang_mau_disambungin, nama_tabel_perantara, foreignkey1_pada_tabel_penghubung, foreignkey2_pada_tabel_penghubung)
    }
}
