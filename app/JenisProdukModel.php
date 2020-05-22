<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisProdukModel extends Model
{
    public $timestamps = false;

    protected $table        = 'jenis_produk'; // nama tabel 
    protected $primaryKey   = 'id_jenis_produk'; // primary key tabel 
    protected $fillable     = ['nama_jenis_produk']; //field tabel

    public function Produk() { //banyak produk memiliki 1 jenis produk
        return $this->hasMany(ProdukModel::class,'id_jenis_produk');
    }
}
