<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tasa extends Model
{
    protected $table='tasas'; 

    protected $primaryKey='id'; 

    public $timestamps=false; 
    
    protected $guarded =[  ];
}
