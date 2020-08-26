<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inicio extends Model
{
    protected $table='inicio'; 

    protected $primaryKey='id'; 

    public $timestamps=false; 
    
    protected $guarded =[  ];
}
