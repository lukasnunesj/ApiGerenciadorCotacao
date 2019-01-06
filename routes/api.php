<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Usuario\UsuarioController;

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

Route::post('/cadastro', 'Usuario\UsuarioController@cadastro');
Route::middleware('auth:api')->put('/perfil', 'Usuario\UsuarioController@perfil');
Route::post('/login', 'Usuario\UsuarioController@login');

Route::middleware('auth:api')->get('/usuario', function (Request $request) {
    return $request->user();
});
