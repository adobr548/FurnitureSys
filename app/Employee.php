<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model{
    
    protected $table = 'darbuotojai';
    public $primaryKey = 'id_Darbuotojas';
    public $timestamps = false;

}