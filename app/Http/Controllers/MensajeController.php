<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\MensajeRequest;

use App\Mensaje;

use DB;

use Illuminate\Support\Facades\Redirect;

use Carbon\Carbon;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;

class MensajeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
       
    public function index()
    {
    	$mensajes = Mensaje::paginate(20);

        return view('mensajes.index', compact('mensajes'));
    }

    public function edit($id)

    {   

         $mensajes=Mensaje::findOrFail($id);
     
         return view('mensajes.edit', compact('mensajes'));

        }

  public function update(MensajeRequest $request, $id)
    {
            try {
                 DB::beginTransaction();

                    $mensajes=Mensaje::findOrFail($id);

        			$input = $request->all();

        			$mensajes->fill($input)->save();


                    $user = Auth::user()->name;
                    $mensajes->usuario_editor=$user;
                    $date = Carbon::now('America/Caracas');
                    $mensajes->fecha_edicion=$date->toDateTimeString();               

                   

                    $mensajes->save(); 


                 DB::commit();

            }catch (\Exception $e) {

                 \DB::rollBack();

                 return Redirect::back();
 
            } 

        return Redirect::to('mensajes');


    }    

     public function create()
    {           

        return view('mensajes.create');

        }


     public function store(MensajeRequest $request)
    {

        try {
                 DB::beginTransaction();

                    $mensajes=new Mensaje($request->all());

                     $user = Auth::user()->name;
                     $mensajes->usuario_creador=$user;
                     $date = Carbon::now('America/Caracas');
                     $mensajes->fecha_creacion=$date->toDateTimeString();    

                     $user = Auth::user()->name;
                     $mensajes->usuario_editor=$user;
                     $date = Carbon::now('America/Caracas');
                     $mensajes->fecha_edicion=$date->toDateTimeString();        

                     $mensajes->save();


                 DB::commit();

            }catch (\Exception $e) {

                 \DB::rollBack();

                 return Redirect::back();
 
            }

        return Redirect::to('mensajes');
    }

    public function destroy($id)

    {  

       $mensajes=Mensaje::findOrFail($id);

       $mensajes->delete();

         return Redirect::to('mensajes');

    }

public function show($id){

        $mensajes = Mensaje::findOrFail($id);


          return view('mensajes.show', compact('mensajes'));
            
        }
}
