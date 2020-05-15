<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailPendaftaranModel extends Model
{
    public $timestamps = false;

    protected $table        = 'detail_pendaftaran'; // nama tabel 
    protected $primaryKey   = 'id_detail_pendaftaran'; // primary key tabel 
    protected $fillable     = ['id_pendaftaran',
    							'id_seni_tari']; //field tabel 
}
