<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'mokejimai';
    public $primaryKey = 'id_Mokejimas';
    public $timestamps = false;
}
