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
Route::get('cauchos','InicioController@cauchos')->name('cauchos');
Route::get('accesorios','InicioController@accesorios')->name('accesorios');
Route::get('servicios_ver','InicioController@servicios_ver')->name('servicios_ver');
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
Route::post('resumen_compras','OrdenCompraController@resumen')->name('resumen');
Route::resource('orden_compras', 'OrdenCompraController');
Route::get('ya_he_comprado','InicioController@ya_he_comprado')->name('ya_he_comprado');
Route::get('primera_vez','InicioController@primera_vez')->name('primera_vez');
Route::get('fin_pedido','OrdenCompraController@finpedido')->name('finpedido');
Route::get('pregunta','InicioController@pregunta')->name('pregunta');
Route::post('login_cliente','InicioController@login_cliente')->name('login_cliente');
Route::post('crear_cliente','InicioController@crear_cliente')->name('crear_cliente');



// Rutas Carrito
Route::get('carrito', 'CarritoController@index')->name('carrito');
Route::post('agregar_carrito', 'CarritoController@agregar_carrito')->name('agregar_carrito');
Route::post('actualizar_carrito', 'CarritoController@actualizar_carrito')->name('actualizar_carrito');
Route::get('remover/{id}', 'CarritoController@remover')->name('remover');


// Rutas Usuarios
Route::get('nuevo','UsuarioController@nuevo')->name('nuevo');
Route::get('cambio_pass/{id}', 'UsuarioController@cambio_pass')->name('cambio_pass');
Route::PATCH('actualizar_pass', 'UsuarioController@actualizar_pass')->name('actualizar_pass');
Route::resource('usuarios', 'UsuarioController');
Route::get('pass_lost', 'UsuarioController@pass_lost')->name('pass_lost');
Route::post('pass_lost_email', 'UsuarioController@pass_lost_email')->name('pass_lost_email');
Route::get('pass_lost_clientes', 'UsuarioController@pass_lost_clientes')->name('pass_lost_clientes');
Route::post('pass_lost_email_clientes', 'UsuarioController@pass_lost_email_clientes')->name('pass_lost_email_clientes');