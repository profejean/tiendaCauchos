<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\GeneralRequest;

use App\General;

use DB;

use Illuminate\Support\Facades\Redirect;

use Carbon\Carbon;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;

use Cart;

class GeneralController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
       
    public function index()
    {
    	$general = General::paginate(20);

        $cantidad_carrito = 0;
        foreach(Cart::content() as $c){
        $cantidad_carrito += $c->qty;
        }

        return view('general.index', compact('general','cantidad_carrito'));
    }

    public function edit($id)

    {   
        $cantidad_carrito = 0;
        foreach(Cart::content() as $c){
        $cantidad_carrito += $c->qty;
        }
         $general=General::findOrFail($id);
     
         return view('general.edit', compact('general','cantidad_carrito'));

        }

  public function update(GeneralRequest $request, $id)
    {
            try {
                 DB::beginTransaction();

                    $general=General::findOrFail($id);

        			$input = $request->all();

        			$general->fill($input)->save();


                    $user = Auth::user()->name;
                    $general->usuario_editor=$user;
                    $date = Carbon::now('America/Caracas');
                    $general->fecha_edicion=$date->toDateTimeString();               

                   

                    $general->save(); 


                 DB::commit();

            }catch (\Exception $e) {

                 \DB::rollBack();

                 return Redirect::back();
 
            } 

        return Redirect::to('general');


    }    

     public function create()
    {           
        $cantidad_carrito = 0;
        foreach(Cart::content() as $c){
        $cantidad_carrito += $c->qty;
        }
        return view('general.create', compact('cantidad_carrito'));

        }


     public function store(GeneralRequest $request)
    {

        try {
                 DB::beginTransaction();

                    $general=new General($request->all());

                     $user = Auth::user()->name;
                     $general->usuario_creador=$user;
                     $date = Carbon::now('America/Caracas');
                     $general->fecha_creacion=$date->toDateTimeString();    

                     $user = Auth::user()->name;
                     $general->usuario_editor=$user;
                     $date = Carbon::now('America/Caracas');
                     $general->fecha_edicion=$date->toDateTimeString();        

                     $general->save();


                 DB::commit();

            }catch (\Exception $e) {

                 \DB::rollBack();

                 return Redirect::back();
 
            }

        return Redirect::to('general');
    }

    public function destroy($id)

    {  

       $general=General::findOrFail($id);

       $general->delete();

        return Redirect::to('general');

    }

public function show($id){

        $general = General::findOrFail($id);

        $cantidad_carrito = 0;
        foreach(Cart::content() as $c){
        $cantidad_carrito += $c->qty;
        }


          return view('general.show', compact('general','cantidad_carrito'));
            
        }
}
