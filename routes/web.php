<?php

use App\Http\Controllers\ClientesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\FornecedoresController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\TesteController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::resource('/sobre-nos', SobreNosController::class);
Route::resource('/contato', ContatoController::class);
Route::resource('/login', LoginController::class);

Route::get('/testes/{nome}/{sobrenome}', [TesteController::class, 'teste'])->name('pages.testes');

Route::prefix('app')->group(function () {
    Route::resource('/clientes', ClientesController::class);
    Route::resource('/fornecedores', FornecedoresController::class);
    Route::resource('/produtos', ProdutosController::class);
});
// Route::fallback(function () {
//     echo "ABC";
// });
