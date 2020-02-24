<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model{
    
    protected $table = 'sandeliai';
    public $primaryKey = 'id_Sandelys';
    public $timestamps = false;

}