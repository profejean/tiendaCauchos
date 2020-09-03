<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\General;
use App\Producto;
use App\Servicio;

class WecolmeController extends Controller
{
        public function index()
    {
    	$general = General::paginate(5);
    	$productos = Producto::paginate(5);
    	$servicios = Servicio::paginate(5);

        return view('welcome', compact('general', 'productos', 'servicios' ));
    }
}
