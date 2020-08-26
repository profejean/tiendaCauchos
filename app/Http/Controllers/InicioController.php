<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\InicioRequest;

use App\Inicio;

use DB;

use Illuminate\Support\Facades\Redirect;

use Carbon\Carbon;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;

class InicioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
       
    public function index()
    {
    	$inicio = Inicio::paginate(20);

        return view('inicio.index', compact('inicio'));
    }

    public function edit($id)

    {   

         $inicio=Inicio::findOrFail($id);
     
         return view('inicio.edit', compact('inicio'));

        }

  public function update(InicioRequest $request, $id)
    {
            try {
                 DB::beginTransaction();

                    $inicio=Inicio::findOrFail($id);

        			$input = $request->all();

        			$inicio->fill($input)->save();


                    $user = Auth::user()->name;
                    $inicio->usuario_editor=$user;
                    $date = Carbon::now('America/Caracas');
                    $inicio->fecha_edicion=$date->toDateTimeString();               

                   

                    $inicio->save(); 


                 DB::commit();

            }catch (\Exception $e) {

                 \DB::rollBack();

                 return Redirect::back();
 
            } 

        return Redirect::to('inicio');


    }    

     public function create()
    {           

        return view('inicio.create');

        }


     public function store(InicioRequest $request)
    {

        try {
                 DB::beginTransaction();

                    $inicio=new Inicio($request->all());

                     $user = Auth::user()->name;
                     $inicio->usuario_creador=$user;
                     $date = Carbon::now('America/Caracas');
                     $inicio->fecha_creacion=$date->toDateTimeString();    

                     $user = Auth::user()->name;
                     $inicio->usuario_editor=$user;
                     $date = Carbon::now('America/Caracas');
                     $inicio->fecha_edicion=$date->toDateTimeString();        

                     $inicio->save();


                 DB::commit();

            }catch (\Exception $e) {

                 \DB::rollBack();

                 return Redirect::back();
 
            }

        return Redirect::to('inicio');
    }

    public function destroy($id)

    {  

       $inicio=Inicio::findOrFail($id);

       $inicio->delete();

         return Redirect::to('inicio');

    }

public function show($id){

        $inicio = Inicio::findOrFail($id);


          return view('inicio.show', compact('inicio'));
            
        }
}
