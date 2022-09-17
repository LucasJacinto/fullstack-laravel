<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Carbon\Carbon;

use App\Http\Controllers\HelloController;

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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::get('/dataHora', function (Request $request) {
    $mytime = Carbon::now();
    return response()->json([
        'data' => $mytime->format('d/m/Y'),
        'hora' => $mytime->format('H:i'),
    ]);
});

Route::get('/hello', [ HelloController::class, 'hello' ]);

Route::post('/post', [ HelloController::class, 'post' ]);
// TODO: criar uma rota que retorne a data-hora atual (sugestão: use a função `now()`) -> checked
// TODO: criar uma rota POST que chame uma função em um controller e retorne o texto recebido na requisição -> checked
