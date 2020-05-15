<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Iluminate\Database\QueryException;
class ModelUser extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'id_user';
}
