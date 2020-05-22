<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PembayaranModel extends Model
{
    public $timestamps = false;
	
    protected $table        = 'pembayaran'; // nama tabel 
    protected $primaryKey   = 'id_pembayaran'; // primary key tabel 
    protected $fillable     = ['tgl_pembayaran', 
    							'bukti_pembayaran',
    							'harga',
                                'status_bayar',
    							'id_penyewaan']; //field tabel 

    public function Penyewaan() { //Penyewaan dimiliki oleh Pembayaran
    	return $this->belongsTo(PenyewaanModel::class,'id_penyewaan');
    }
}
