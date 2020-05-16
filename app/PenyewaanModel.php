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
}
