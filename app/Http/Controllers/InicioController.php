<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\InicioRequest;
use App\General;
use App\User;
use App\Servicio;
use DB;
use App\Producto;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Cart;



class InicioController extends Controller
{

    public function index()
    {
    	$inicio = General::findOrFail(1);

        $cantidad_carrito = 0;
        foreach(Cart::content() as $c){
        $cantidad_carrito += $c->qty;
        }
        return view('welcome', compact('inicio','cantidad_carrito'));
    }

    public function cauchos()
    {  
        $cantidad_carrito = 0;
        foreach(Cart::content() as $c){
        $cantidad_carrito += $c->qty;
        }
        $inicio = General::findOrFail(1);
        $productos = Producto::where('categoria', '=', 'cauchos')->orderBy('id','desc')->paginate(9);    

        return view('productos.cauchos', compact('productos','cantidad_carrito','inicio'));
    }  

	public function accesorios()

    {      
        $cantidad_carrito = 0;
        foreach(Cart::content() as $c){
        $cantidad_carrito += $c->qty;
        }
        $inicio = General::findOrFail(1);

        $productos = Producto::where('categoria', '=', 'accesorios')->orderBy('id','desc')->paginate(9); 
        return view('productos.accesorios', compact('productos','cantidad_carrito','inicio'));
    } 

    public function servicios_ver(){

        $cantidad_carrito = 0;
        foreach(Cart::content() as $c){
        $cantidad_carrito += $c->qty;
        }
        $inicio = General::findOrFail(1);

        $servicios = Servicio::findOrFail(1);
        return view('servicios.show', compact('servicios','cantidad_carrito','inicio'));
            
    }

  public function pregunta()
    { 

        $cantidad_carrito = 0;
        foreach(Cart::content() as $c){
        $cantidad_carrito += $c->qty;
        }
        $inicio = General::findOrFail(1);

        return view('orden_compras.pregunta_compra', compact('cantidad_carrito','inicio'));
    }  

  public function ya_he_comprado()
    {

        $cantidad_carrito = 0;
        foreach(Cart::content() as $c){
        $cantidad_carrito += $c->qty;
        }
        $inicio = General::findOrFail(1);

        if(Auth::check()){

             return view('orden_compras.create',compact('cantidad_carrito','inicio'));

        }else{
        
        $existe= ' ';
        $status= ' ';

        return view('orden_compras.ya_he_comprado',compact('cantidad_carrito','inicio','existe','status'));

        }
    }

public function primera_vez()
    {

        $cantidad_carrito = 0;
        foreach(Cart::content() as $c){
        $cantidad_carrito += $c->qty;
        }
        $inicio = General::findOrFail(1);

         if(Auth::check()){

             return view('orden_compras.create',compact('cantidad_carrito','inicio'));

        }else{

        return view('orden_compras.primera_vez', compact('cantidad_carrito','inicio'));

        }
    }

     public function login_cliente(Request $request){

        $email = $request->get('email'); 
        $user = User::where('email','=',$email)->get();      
        $password = $request->get('password'); 

        $cantidad_carrito = 0;
        foreach(Cart::content() as $c){
        $cantidad_carrito += $c->qty;
        }  
        $inicio = General::findOrFail(1);

        if((count($user) > 0)){     

           if (Hash::check($password, $user[0]->password)) { 

                $credentials = $request->only('email', 'password');
                if (Auth::attempt($credentials)) {       
                    
                return view('orden_compras.create', compact('cantidad_carrito','user','inicio'));  
                }       
            }else{
                $existe = ' ';
                $status = 'negado_password';   
                return view('orden_compras.ya_he_comprado', compact('cantidad_carrito','inicio','status','existe'));
            }
        }else{
            $existe = ' ';
            $status = 'negado_email';   
            return view('orden_compras.ya_he_comprado', compact('cantidad_carrito','inicio','status','existe'));

        }

    }

    public function crear_cliente(Request $request){

         $users=new User($request->all());
         $users->password = Hash::make($request->get('password'));    
         $users->rol = 'Cliente';                          

        $users->save(); 

        $cantidad_carrito = 0;
        foreach(Cart::content() as $c){
        $cantidad_carrito += $c->qty;
        }  
        $inicio = General::findOrFail(1); 

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {       
            
        return view('orden_compras.create', compact('cantidad_carrito','inicio'));  
        }else{
          return view('orden_compras.primera_vez', compact('cantidad_carrito','inicio'));  
        }          

            

    }

}
