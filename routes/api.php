<?php

use App\Models\Information;
use App\Models\Suscripcion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('information', function(Request $request) {
    $information = array(
        'nombre' => $request->get('nombre'),
        'email' => $request->get('email'),
        'telefono' => $request->get('telefono'),
        'descripcion' => $request->get('descripcion'),
        'procesado' => 0,
    );
    return Information::create($information);
});

Route::post('suscription', function(Request $request) {
    return Suscripcion::create($request->all);
});
