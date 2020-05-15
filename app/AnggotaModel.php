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
}
