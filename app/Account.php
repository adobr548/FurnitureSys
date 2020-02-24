<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model{
    
    protected $table = 'saskaitos';
    public $primaryKey = 'id_Saskaita';
    public $timestamps = false;

}