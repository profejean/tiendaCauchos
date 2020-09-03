<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ProductoRequest;

use App\Producto;

use DB;

use Illuminate\Support\Facades\Redirect;

use Carbon\Carbon;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;

class ProductoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
       
    public function index()
    {
    	$productos = Producto::paginate(20);

        return view('productos.index', compact('productos'));
    }

    public function edit($id)

    {   

         $productos=Producto::findOrFail($id);
     
         return view('productos.edit', compact('productos'));

        }

  public function update(ProductoRequest $request, $id)
    {
            try {
                 DB::beginTransaction();

                    $productos=Producto::findOrFail($id);

        			$input = $request->all();

        			$productos->fill($input)->save();


                    $user = Auth::user()->name;
                    $productos->usuario_editor=$user;
                    $date = Carbon::now('America/Caracas');
                    $productos->fecha_edicion=$date->toDateTimeString();               

                   

                    $productos->save(); 


                 DB::commit();

            }catch (\Exception $e) {

                 \DB::rollBack();

                 return Redirect::back();
 
            } 

        return Redirect::to('productos');


    }    

     public function create()
    {           

        return view('productos.tipo');

        }


     public function store(ProductoRequest $request)
    {

        try {
                 DB::beginTransaction();

                    $productos=new Producto($request->all());

                     $user = Auth::user()->name;
                     $productos->usuario_creador=$user;
                     $date = Carbon::now('America/Caracas');
                     $productos->fecha_creacion=$date->toDateTimeString();    

                     $user = Auth::user()->name;
                     $productos->usuario_editor=$user;
                     $date = Carbon::now('America/Caracas');
                     $productos->fecha_edicion=$date->toDateTimeString();        

                     $productos->save();


                 DB::commit();

            }catch (\Exception $e) {

                 \DB::rollBack();

                 return Redirect::back();
 
            }

        return Redirect::to('productos');
    }

    public function destroy($id)

    {  

       $productos=Producto::findOrFail($id);

       $productos->delete();

         return Redirect::to('productos');

    }

public function show($id){

        $productos = Producto::findOrFail($id);


          return view('productos.show', compact('productos'));
            
        }

  public function tipo(Request $request)
    {
          
        $tipo=$request->get('tipo');


        return view('productos.create', compact('tipo'));
    }    

  public function cauchos(Request $request)
    {

        
        $productos = Producto::where('categoria', '=', 'cauchos')->orderBy('id','desc')->paginate(20);   
        $cauchos=$request->get('cauchos');


        return view('productos.cauchos', compact('cauchos', 'productos'));
    }  

public function accesorios(Request $request)
    {

        
        $productos = Producto::where('categoria', '=', 'accesorios')->orderBy('id','desc')->paginate(20);   
        $accesorios=$request->get('accesorios');


        return view('productos.accesorios', compact('accesorios', 'productos'));
    } 
}
