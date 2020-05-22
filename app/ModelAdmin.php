<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelAdmin extends Model
{
	public $timestamps = false;

    protected $table        = 'admin'; // nama tabel 
    protected $primaryKey   = 'id_admin'; // primary key tabel 
    protected $fillable     = ['nama_admin', 
    							'username', 
    							'password', 
    							'email',
    							'no_hp']; //field tabel 

    public function Penyewaan() { // 1 admin memiliki banyak penyewaan
        return $this->hasMany(ModelPenyewaan::class,'id_admin');
    }
}
