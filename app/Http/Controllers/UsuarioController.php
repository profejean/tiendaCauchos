<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Cart;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\UsuarioRequest;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    public function index(){

        $usuarios = User::orderBy('id','asc')->paginate(20);

        $cantidad_carrito = 0;
        foreach(Cart::content() as $c){
        $cantidad_carrito += $c->qty;
        }

        return view('usuarios.index', compact('usuarios','cantidad_carrito'));
    }
    
    public function edit($id)

    { 

        $cantidad_carrito = 0;
        foreach(Cart::content() as $c){
        $cantidad_carrito += $c->qty;
        }

         $usuarios = User::findOrFail($id);	
    	   		

         return view('usuarios.edit',compact('usuarios','cantidad_carrito'));

   }
	public function update(UsuarioRequest $request, $id)

    { 

					$usuarios=User::findOrFail($id);
                    $usuarios->email=$request->get('email');
                    $usuarios->name=$request->get('name');
                    $usuarios->password = Hash::make($request->get('password'));
                    $usuarios->save();

        

         $usuarios->save();

         return Redirect::to('usuarios');

       
    }

     public function create()

    {        

        $cantidad_carrito = 0;
        foreach(Cart::content() as $c){
        $cantidad_carrito += $c->qty;
        }

        return view('usuarios.create', compact('cantidad_carrito'));
    }

    public function store(UsuarioRequest $request)

    {   

       $usuarios=new User;
	        $usuarios->email=$request->get('email');
	        $usuarios->name=$request->get('name');
	        $usuarios->password = Hash::make($request->get('password'));
	        $usuarios->save();
        

      

       return Redirect::to('usuarios');                   
        
    }

    public function destroy($id)

    {  

       $usuarios=User::findOrFail($id);

       $usuarios->delete();

         return Redirect::to('usuarios');

    }

  public function nuevo(Request $request)
    {
          
        $nuevo = $request->get('nuevo');

        $cantidad_carrito = 0;
        foreach(Cart::content() as $c){
        $cantidad_carrito += $c->qty;
        }

        return view('usuarios.usuario_nuevo', compact('nuevo','cantidad_carrito'));

    }
      
}
