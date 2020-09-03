<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ServicioRequest;

use App\Servicio;

use DB;

use Illuminate\Support\Facades\Redirect;

use Carbon\Carbon;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;

class ServicioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
       
    public function index()
    {
    	$servicios = Servicio::paginate(20);

        return view('servicios.index', compact('servicios'));
    }

    public function edit($id)

    {   

         $servicios=Servicio::findOrFail($id);
     
         return view('servicios.edit', compact('servicios'));

        }

  public function update(ServicioRequest $request, $id)
    {
            try {
                 DB::beginTransaction();

                    $servicios=Servicio::findOrFail($id);

        			$input = $request->all();

        			$servicios->fill($input)->save();


                    $user = Auth::user()->name;
                    $servicios->usuario_editor=$user;
                    $date = Carbon::now('America/Caracas');
                    $servicios->fecha_edicion=$date->toDateTimeString();               

                   

                    $servicios->save(); 


                 DB::commit();

            }catch (\Exception $e) {

                 \DB::rollBack();

                 return Redirect::back();
 
            } 

        return Redirect::to('servicios');


    }    

     public function create()
    {           

        return view('servicios.create');

        }


     public function store(ServicioRequest $request)
    {

        try {
                 DB::beginTransaction();

                    $servicios=new Servicio($request->all());

                     $user = Auth::user()->name;
                     $servicios->usuario_creador=$user;
                     $date = Carbon::now('America/Caracas');
                     $servicios->fecha_creacion=$date->toDateTimeString();    

                     $user = Auth::user()->name;
                     $servicios->usuario_editor=$user;
                     $date = Carbon::now('America/Caracas');
                     $servicios->fecha_edicion=$date->toDateTimeString();        

                     $servicios->save();


                 DB::commit();

            }catch (\Exception $e) {

                 \DB::rollBack();

                 return Redirect::back();
 
            }

        return Redirect::to('servicios');
    }

    public function destroy($id)

    {  

       $servicios=Servicio::findOrFail($id);

       $servicios->delete();

         return Redirect::to('servicios');

    }

public function show($id){

        $servicios = Servicio::orderBy('id', 'asc')->get();


          return view('servicios.show', compact('servicios'));
            
        }
}
