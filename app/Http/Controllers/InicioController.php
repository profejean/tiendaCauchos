<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\InicioRequest;

use App\General;

use App\Servicio;

use DB;

use App\Producto;

use Illuminate\Support\Facades\Redirect;

use Carbon\Carbon;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;

class InicioController extends Controller
{
       
    public function index()
    {
    	$inicio = General::findOrFail(1);

        return view('welcome', compact('inicio'));
    }

    public function cauchos()
    {  

        $productos = Producto::where('categoria', '=', 'cauchos')->orderBy('id','desc')->paginate(20);   

        return view('productos.cauchos', compact('productos'));
    }  

	public function accesorios()

    {        
        $productos = Producto::where('categoria', '=', 'accesorios')->orderBy('id','desc')->paginate(20); 
        return view('productos.accesorios', compact('productos'));
    } 

    public function servicios_ver(){

        $servicios = Servicio::findOrFail(1);
        return view('servicios.show', compact('servicios'));
            
    }

  public function pregunta()
    { 

        return view('orden_compras.pregunta_compra');
    }  

  public function ya_he_comprado()
    {

        return view('orden_compras.ya_he_comprado');
    }

public function primera_vez()
    {

        return view('orden_compras.primera_vez');
    }

}
