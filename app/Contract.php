<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model{
    
    protected $table = 'sutartys';
    public $primaryKey = 'id_Sutartis';
    public $timestamps = false;

}