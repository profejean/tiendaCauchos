<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\CarritoRequest;

use DB;

use Illuminate\Support\Facades\Redirect;

use Carbon\Carbon;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;

class CarritoController extends Controller
{
    public function index()
    {

        return view('carrito.index');
    }

}
