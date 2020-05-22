<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Iluminate\Database\QueryException;
class ModelUser extends Model
{
	public $timestamps = false;

    protected $table = 'user';
    protected $primaryKey = 'id_user';
    protected $fillable     = ['nama_user', 
    							'username', 
    							'password', 
    							'email',
    							'no_hp',
    							'alamat']; //field tabel

    public function Penyewaan() { // 1 admin memiliki banyak penyewaan
        return $this->hasMany(ModelPenyewaan::class,'id_user');
    }

    public function Pendaftaran() { // 1 user memiliki banyak pendaftaran
        return $this->hasMany(ModelPendaftaran::class,'id_user');
    } 
}
