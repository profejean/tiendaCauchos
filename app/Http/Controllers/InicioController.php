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

use Cart;

class InicioController extends Controller
{
       
    public function index()
    {
    	$inicio = General::findOrFail(1);

        $cantidad_carrito = 0;
        foreach(Cart::content() as $c){
        $cantidad_carrito += $c->qty;
        }
        return view('welcome', compact('inicio','cantidad_carrito'));
    }

    public function cauchos()
    {  
        $cantidad_carrito = 0;
        foreach(Cart::content() as $c){
        $cantidad_carrito += $c->qty;
        }
        $productos = Producto::where('categoria', '=', 'cauchos')->orderBy('id','desc')->paginate(9);    

        return view('productos.cauchos', compact('productos','cantidad_carrito'));
    }  

	public function accesorios()

    {      
        $cantidad_carrito = 0;
        foreach(Cart::content() as $c){
        $cantidad_carrito += $c->qty;
        }

        $productos = Producto::where('categoria', '=', 'accesorios')->orderBy('id','desc')->paginate(9); 
        return view('productos.accesorios', compact('productos','cantidad_carrito'));
    } 

    public function servicios_ver(){

        $cantidad_carrito = 0;
        foreach(Cart::content() as $c){
        $cantidad_carrito += $c->qty;
        }

        $servicios = Servicio::findOrFail(1);
        return view('servicios.show', compact('servicios','cantidad_carrito'));
            
    }

  public function pregunta()
    { 

        $cantidad_carrito = 0;
        foreach(Cart::content() as $c){
        $cantidad_carrito += $c->qty;
        }

        return view('orden_compras.pregunta_compra', compact('cantidad_carrito'));
    }  

  public function ya_he_comprado()
    {
        $cantidad_carrito = 0;
        foreach(Cart::content() as $c){
        $cantidad_carrito += $c->qty;
        }

        return view('orden_compras.ya_he_comprado',compact('cantidad_carrito'));
    }

public function primera_vez()
    {

        $cantidad_carrito = 0;
        foreach(Cart::content() as $c){
        $cantidad_carrito += $c->qty;
        }

        return view('orden_compras.primera_vez', compact('cantidad_carrito'));
    }

}
