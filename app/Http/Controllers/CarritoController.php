<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\CarritoRequest;

use DB;

use App\Producto;

use Illuminate\Support\Facades\Redirect;

use Carbon\Carbon;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;

use Cart;

class CarritoController extends Controller
{
    public function index()
    {
    	$cantidad_carrito = 0;
        foreach(Cart::content() as $c){
        $cantidad_carrito += $c->qty;
        }
        return view('carrito.index', compact('cantidad_carrito'));
    }

    public function agregar_carrito(Request $request){


        $cantidad = $request->get('cantidad'); 
        $producto_id = $request->get('producto_id'); 
        $inventario = $request->get('inventario'); 
        $precio_dolar = $request->get('precio_dolar'); 
        $producto = Producto::findOrFail($producto_id);   
        $img = $producto->imagen_1;
        $nombre = $producto->nombre;         

        $carro = Cart::add(['id' => $producto_id, 'name' => $nombre, 'qty' => $cantidad, 'price' => $precio_dolar, 'options' => ['img' => $img, 'inv' => $inventario]]); 
     

        return back()->withInput(); 
    }

    public function remover($id){

        $remover = Cart::remove($id);       
        return Redirect::to('carrito');


    }

    public function actualizar_carrito(Request $request){

        $rowId = $request->get('rowId');
        $cantidad = $request->get('cantidad');
        $editar = Cart::update($rowId, ['qty' => $cantidad]);
      
        return Redirect::to('carrito');


    } 

}
