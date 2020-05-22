<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PenyewaanModel extends Model
{
    public $timestamps = false;
    
    protected $table        = 'penyewaan'; // nama tabel 
    protected $primaryKey   = 'id_penyewaan'; // primary key tabel 
    protected $keyType = 'string'; //primary key berupa string bukan integer
    protected $fillable     = ['tgl_sewa', 
                                'tgl_kembali',
                                'nama_penyewa',
                                'email',
                                'foto_ktp',
                                'status_sewa',
                                'id_admin',
                                'id_user']; //field tabel

    public function Produk() {
        return $this->belongsToMany(ProdukModel::class,'detail_penyewaan','id_penyewaan','id_produk');//model_tabel_yang_mau_disambungin, nama_tabel_perantara, foreignkey1_pada_tabel_penghubung, foreignkey2_pada_tabel_penghubung)
    }

    public function Admin() { //Penyewaan dimiliki oleh Admin
        return $this->belongsTo(ModelAdmin::class,'id_admin');
        //nama_modelTabelrelasinya,foreignkey di tabel penyewaan
    } 

    public function User() { //Penyewaan dimiliki oleh User
        return $this->belongsTo(ModelUser::class,'id_user');
        //nama_modelTabelrelasinya,foreignkey di tabel penyewaan
    } 

    public function Pembayaran() { //setiap 1 pembayaran memiliki 1 penyewaan
        return $this->hasOne(PembayaranModel::class,'id_penyewaan');
        //nama_modelTabelrelasinya,foreignkey di tabel pembayaran
    }


}
