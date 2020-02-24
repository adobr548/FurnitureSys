<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model{
    
    protected $table = 'pirkejai';
    public $primaryKey = 'id_Pirkejas';
    public $timestamps = false;

}