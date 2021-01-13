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



/*Route::get('/checkin', function () {
    return view('checkin/checkin');
}); */

Auth::routes();

Route::get('/', [App\Http\Controllers\Controller::class, 'welcome'])->name('welcome');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/encomenda/checkin', [App\Http\Controllers\EncomendasController::class, 'checkin'])->name('checkin');
Route::get('/encomenda/checkin/unidades_json', [App\Http\Controllers\EncomendasController::class, 'unidades_json']);
Route::post('/encomenda/checkin/inserir', [App\Http\Controllers\EncomendasController::class, 'create'])->name('insert_checkin');
Route::get('/encomenda/checkout', [App\Http\Controllers\EncomendasController::class, 'checkout'])->name('checkout');
Route::get('/encomenda/checkout/{id}', [App\Http\Controllers\EncomendasController::class, 'realizar_checkout'])->name('realizarcheckout');
Route::post('/encomenda/checkout/{id}', [App\Http\Controllers\EncomendasController::class, 'do_checkout'])->name('realizarcheckout');

Route::get('/encomenda/geral', [App\Http\Controllers\EncomendasController::class, 'geral'])->name('encomendasgeral');

Route::get('/condominio/unidades', [App\Http\Controllers\CondominioController::class, 'unidades_list'])->name('listaunidades');

Route::get('/condominio/moradores', [App\Http\Controllers\CondominioController::class, 'moradores_list'])->name('listamoradores');
Route::get('/condominio/morador/delete/{id}', [App\Http\Controllers\CondominioController::class, 'morador_delete'])->name('deletarmorador');
Route::get('/condominio/morador/cadastrar', [App\Http\Controllers\CondominioController::class, 'morador_cadastrar'])->name('cadmorador');

Route::get('/reports/pacotes', [App\Http\Controllers\ReportsController::class, 'pacotes_entregues']);

Route::get('storage/{filename}', function ($filename)
{
    $path = storage_path('app/' . $filename);

    if (!File::exists($path)) {
        abort(404);
    }

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
});