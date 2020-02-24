<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Furniture extends Model{
    
    protected $table = 'baldai';
    public $primaryKey = 'id_Baldas';
    public $timestamps = false;

}