<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\OrdenCompraRequest;
use App\OrdenCompra;
use App\General;
use App\DetalleCompra;
use DB;
use Cart;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class OrdenCompraController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
       
    public function index()
    {
    	$orden_compras = OrdenCompra::paginate(20);

        $cantidad_carrito = 0;
        foreach(Cart::content() as $c){
        $cantidad_carrito += $c->qty;
        }
        $inicio = General::findOrFail(1);

        return view('orden_compras.index', compact('orden_compras','cantidad_carrito','inicio'));
    }

    public function edit($id)

    {   

        $orden_compras=OrdenCompra::findOrFail($id);
        $detalle_compras = DetalleCompra::where('pedido_id','=',$id)->get();

        $cantidad_carrito = 0;
        foreach(Cart::content() as $c){
        $cantidad_carrito += $c->qty;
        }

        $inicio = General::findOrFail(1);
     
         return view('orden_compras.edit', compact('orden_compras', 'detalle_compras','cantidad_carrito','inicio'));

        }

  public function update(OrdenCompraRequest $request, $id)
    {
            try {
                 DB::beginTransaction();

                    $orden_compras=OrdenCompra::findOrFail($id);

        			$input = $request->all();

        			$orden_compras->fill($input)->save();


                    $user = Auth::user()->name;
                    $orden_compras->usuario_editor=$user;
                    $date = Carbon::now('America/Caracas');
                    $orden_compras->fecha_edicion=$date->toDateTimeString();               

                   

                    $orden_compras->save(); 


                 DB::commit();

            }catch (\Exception $e) {

                 \DB::rollBack();

                 return Redirect::back();
 
            } 

        return Redirect::to('orden_compras');


    }    

     public function create()
    {           

        $cantidad_carrito = 0;
        foreach(Cart::content() as $c){
        $cantidad_carrito += $c->qty;
        }

        $inicio = General::findOrFail(1);

        return view('orden_compras.create', compact('cantidad_carrito','inicio'));

        }


     public function store(OrdenCompraRequest $request)
    {

        try {
                 DB::beginTransaction();

                    $orden_compras=new OrdenCompra($request->all());

                     $user = Auth::user()->name;
                     $orden_compras->usuario_creador=$user;
                     $date = Carbon::now('America/Caracas');
                     $orden_compras->fecha_creacion=$date->toDateTimeString();    

                     $user = Auth::user()->name;
                     $orden_compras->usuario_editor=$user;
                     $date = Carbon::now('America/Caracas');
                     $orden_compras->fecha_edicion=$date->toDateTimeString();        

                     $orden_compras->save();


                 DB::commit();

            }catch (\Exception $e) {

                 \DB::rollBack();

                 return Redirect::back();
 
            }

        return Redirect::to('fin_pedido');
    }

    public function destroy($id)

    {  

       $orden_compras=OrdenCompra::findOrFail($id);

       $orden_compras->delete();

         return Redirect::to('orden_compras');

    }

public function show($id)

    {

        $orden_compras = OrdenCompra::findOrFail($id); 

        $detalle_compras = DetalleCompra::where('pedido_id','=',$id)->get();

        $cantidad_carrito = 0;
        foreach(Cart::content() as $c){
        $cantidad_carrito += $c->qty;
        }

        $inicio = General::findOrFail(1);


          return view('orden_compras.show', compact('orden_compras', 'detalle_compras','cantidad_carrito','inicio'));
            
        }



  public function resumen(Request $request)
    {
          
        $resumen_compras = $request->get('resumen_compras');

        $cantidad_carrito = 0;
        foreach(Cart::content() as $c){
        $cantidad_carrito += $c->qty;
        }

        $inicio = General::findOrFail(1);


        return view('orden_compras.resumen_compras', compact('resumen_compras','cantidad_carrito','inicio'));
    } 

  public function finpedido(Request $request)
    {
          
        $fin_pedido = $request->get('fin_pedido');

        $cantidad_carrito = 0;
        foreach(Cart::content() as $c){
        $cantidad_carrito += $c->qty;
        }

        $inicio = General::findOrFail(1);


        return view('orden_compras.fin_pedido', compact('fin_pedido','cantidad_carrito','inicio'));
    }

                          
}
