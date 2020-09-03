<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\InicioRequest;

use App\General;

use DB;

use Illuminate\Support\Facades\Redirect;

use Carbon\Carbon;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;

class InicioController extends Controller
{
       
    public function index()
    {
    	$inicio = General::findOrFail(1);

        return view('welcome', compact('inicio'));
    }


}
