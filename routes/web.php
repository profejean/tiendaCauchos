<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Rutas Inicio
Route::get('/', 'InicioController@index');

// Rutas Productos
Route::POST('tipo', 'ProductoController@tipo')->name('tipo');
Route::post('cargar_productos','ProductoController@store')->name('cargar_productos');
Route::get('cauchos','ProductoController@cauchos')->name('cauchos');
Route::get('accesorios','ProductoController@accesorios')->name('accesorios');
Route::resource('productos', 'ProductoController');

// Rutas Tasas
Route::resource('tasas', 'TasaController');

// Rutas General
Route::resource('general', 'GeneralController');

// Rutas Usuario
Route::resource('usuarios', 'UsuarioController');

// Rutas Servicios
Route::resource('servicios', 'ServicioController');

// Rutas Detalle de Compras
Route::resource('detalle_compras', 'DetalleCompraController');

// Rutas Mensajes
Route::resource('mensajes', 'MensajeController');
Route::get('mensaje_status/{id}', 'MensajeController@status');

// Rutas Orden de Compras
Route::resource('orden_compras', 'OrdenCompraController');
Route::get('ya_he_comprado','OrdenCompraController@ya_he_comprado')->name('ya_he_comprado');
Route::get('primera_vez','OrdenCompraController@primera_vez')->name('primera_vez');
Route::get('resumen_compras','OrdenCompraController@resumen')->name('resumen');
Route::get('fin_pedido','OrdenCompraController@finpedido')->name('finpedido');

// Rutas Carrito
Route::get('carrito', 'CarritoController@index')->name('carrito');

// Rutas Usuarios
Route::get('nuevo','UsuarioController@nuevo')->name('nuevo');
Route::resource('usuarios', 'UsuarioController');