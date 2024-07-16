<?php
use App\Http\Controllers\empresarioController;
use App\Http\Controllers\eventoController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\saibamaisController;
use App\Http\Controllers\pageGenerosController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\estabelecimentoController;
use App\Http\Controllers\notaController;
use Illuminate\Support\Facades\Route;


Route::get('/dashboard', [adminController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/admin/create', [empresarioController::class, 'create']);
    Route::post('/admin/create', [empresarioController::class, 'store']);

    Route::get('/admin/estabelecimento/create', [estabelecimentoController::class, 'create']);
    Route::post('/admin/estabelecimento/create', [estabelecimentoController::class, 'store']);

    Route::get('/admin/evento/create', [eventoController::class, 'create']);
    Route::post('/admin/evento/create', [eventoController::class, 'store']);

    Route::get('/qrcode', [eventoController::class, 'getQrcode']);

});

Route::get('/', [homeController::class,'index']);
Route::get('/saibamais', [saibamaisController::class,'index']);
Route::get('/generos', [pageGenerosController::class,'index']);

Route::get('/avaliacao/{id_evento}', [notaController::class, 'index']);
Route::post('/avaliacao/{id_evento}', [notaController::class, 'store']);

require __DIR__.'/auth.php';