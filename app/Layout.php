<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Layout extends Model
{
    protected $table='layouts'; 

    protected $primaryKey='id'; 

    public $timestamps=false; 
    
    protected $guarded =[  ];
}
