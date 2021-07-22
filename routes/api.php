<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


//Embarcadores
Route::prefix('embarcador')->group( function () {
    Route::get('/{id}', 'App\Http\Controllers\EmbarcadorController@find')->name('embarcador.find');
    Route::get('/', 'EmbarcadorController@index')->name('embarcador.index');
    Route::post('/create', 'App\Http\Controllers\EmbarcadorController@create')->name('embarcador.create');

});


//Transportador
Route::prefix('transportador')->group( function () {
    Route::get('/{id}', 'App\Http\Controllers\TransportadorController@find')->name('transportador.find');
    Route::get('/', 'TransportadorController@index')->name('transportador.index');
    Route::post('/create', 'App\Http\Controllers\TransportadorController@create')->name('transportador.create');

});


//Ofertas
Route::prefix('oferta')->group( function () {
    Route::get('/{id}', 'App\Http\Controllers\OfertaController@find')->name('oferta.find');
    Route::get('/', 'OfertasController@index')->name('ofertas.index');
    Route::post('/create', 'App\Http\Controllers\OfertaController@create')->name('oferta.create');
});



//Lance
Route::prefix('lance')->group( function () {
    Route::get('/{id}', 'App\Http\Controllers\LanceController@find')->name('lance.find');
    Route::get('/', 'LanceController@index')->name('lance.index');
    Route::post('/create', 'App\Http\Controllers\LanceController@create')->name('lance.create');
});


//Cliente
Route::prefix('cliente')->group( function () {
    Route::get('/{id}', 'App\Http\Controllers\ClienteController@find')->name('cliente.find');
    Route::get('/', 'ClienteController@index')->name('cliente.index');
    Route::post('/create', 'App\Http\Controllers\ClienteController@create')->name('cliente.create');
});
