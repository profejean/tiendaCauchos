<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\UsuarioRequest;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    public function index(){

        $usuarios = User::orderBy('id','asc')->paginate(20);

        return view('usuarios.index',['usuarios'=>$usuarios]);
    }
    
    public function edit($id)

    { 
         $usuarios = User::findOrFail($id);	
    	   		

         return view('usuarios.edit',['usuarios'=>$usuarios]);

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
        return view('usuarios.create');
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

        return view('usuarios.usuario_nuevo', compact('nuevo'));

    }
      
}
