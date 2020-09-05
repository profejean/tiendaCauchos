<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\TasaRequest;

use App\Tasa;

use DB;

use Illuminate\Support\Facades\Redirect;

use Carbon\Carbon;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;

class TasaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
       
    public function index()
    {
    	$tasas = Tasa::paginate(20);

        $cantidad_carrito = 0;
        foreach(Cart::content() as $c){
        $cantidad_carrito += $c->qty;
        }

        return view('tasas.index', compact('tasas','cantidad_carrito'));
    }

    public function edit($id)

    {   

         $tasas=Tasa::findOrFail($id);

         $cantidad_carrito = 0;
        foreach(Cart::content() as $c){
        $cantidad_carrito += $c->qty;
        }
     
         return view('tasas.edit', compact('tasas','cantidad_carrito'));

        }

  public function update(TasaRequest $request, $id)
    {
            try {
                 DB::beginTransaction();

                    $tasas=Tasa::findOrFail($id);

        			$input = $request->all();

        			$tasas->fill($input)->save();


                    $user = Auth::user()->name;
                    $tasas->usuario_editor=$user;
                    $date = Carbon::now('America/Caracas');
                    $tasas->fecha_edicion=$date->toDateTimeString();               

                   

                    $tasas->save(); 


                 DB::commit();

            }catch (\Exception $e) {

                 \DB::rollBack();

                 return Redirect::back();
 
            } 

        return Redirect::to('tasas');


    }    

     public function create()
    {           

        $cantidad_carrito = 0;
        foreach(Cart::content() as $c){
        $cantidad_carrito += $c->qty;
        }

        return view('tasas.create','cantidad_carrito');

        }


     public function store(TasaRequest $request)
    {

        try {
                 DB::beginTransaction();

                    $tasas=new Tasa($request->all());

                     $user = Auth::user()->name;
                     $tasas->usuario_creador=$user;
                     $date = Carbon::now('America/Caracas');
                     $tasas->fecha_creacion=$date->toDateTimeString();    

                     $user = Auth::user()->name;
                     $tasas->usuario_editor=$user;
                     $date = Carbon::now('America/Caracas');
                     $tasas->fecha_edicion=$date->toDateTimeString();        

                     $tasas->save();


                 DB::commit();

            }catch (\Exception $e) {

                 \DB::rollBack();

                 return Redirect::back();
 
            }

        return Redirect::to('tasas');
    }

    public function destroy($id)

    {  

       $tasas=Tasa::findOrFail($id);

       $tasas->delete();

         return Redirect::to('tasas');

    }

public function show($id){

        $tasas = Tasa::findOrFail($id);

        $cantidad_carrito = 0;
        foreach(Cart::content() as $c){
        $cantidad_carrito += $c->qty;
        }


          return view('tasas.show', compact('tasas','cantidad_carrito'));
            
        }
}
