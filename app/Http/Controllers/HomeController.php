<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Cart;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $cantidad_carrito = 0;
        foreach(Cart::content() as $c){
        $cantidad_carrito += $c->qty;
        }
        return view('home',compact('cantidad_carrito'));
    }
}
