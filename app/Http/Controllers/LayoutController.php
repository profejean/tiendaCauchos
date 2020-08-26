<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\Latout;

use App\Layout;

use DB;

use Illuminate\Support\Facades\Redirect;

use Carbon\Carbon;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;

class LayoutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
       
    public function index()
    {
    	$layouts = Layout::paginate(20);

        return view('layouts.index', compact('layouts'));
    }

    public function edit($id)

    {   

         $layouts=Layout::findOrFail($id);
     
         return view('layouts.edit', compact('layouts'));

        }

  public function update(Latout $request, $id)
    {
            try {
                 DB::beginTransaction();

                    $layouts=Layout::findOrFail($id);

        			$input = $request->all();

        			$layouts->fill($input)->save();


                    $user = Auth::user()->name;
                    $layouts->usuario_editor=$user;
                    $date = Carbon::now('America/Caracas');
                    $layouts->fecha_edicion=$date->toDateTimeString();               

                   

                    $layouts->save(); 


                 DB::commit();

            }catch (\Exception $e) {

                 \DB::rollBack();

                 return Redirect::back();
 
            } 

        return Redirect::to('layouts');


    }    

     public function create()
    {           

        return view('layouts.create');

        }


     public function store(Latout $request)
    {

        try {
                 DB::beginTransaction();

                    $layouts=new Layout($request->all());

                     $user = Auth::user()->name;
                     $layouts->usuario_creador=$user;
                     $date = Carbon::now('America/Caracas');
                     $layouts->fecha_creacion=$date->toDateTimeString();    

                     $user = Auth::user()->name;
                     $layouts->usuario_editor=$user;
                     $date = Carbon::now('America/Caracas');
                     $layouts->fecha_edicion=$date->toDateTimeString();        

                     $layouts->save();


                 DB::commit();

            }catch (\Exception $e) {

                 \DB::rollBack();

                 return Redirect::back();
 
            }

        return Redirect::to('layouts');
    }

    public function destroy($id)

    {  

       $layouts=Layout::findOrFail($id);

       $layouts->delete();

         return Redirect::to('layouts');

    }

public function show($id){

        $layouts = Layout::findOrFail($id);


          return view('layouts.show', compact('layouts'));
            
        }
}
