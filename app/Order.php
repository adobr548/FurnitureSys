<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model{
    
    protected $table = 'uzsakymai';
    public $primaryKey = 'id_Uzsakymas';
    public $timestamps = false;

}