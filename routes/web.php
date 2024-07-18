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
    Route::get('/admin/create', [empresarioController::class, 'create'])->name('empresario.show');
    Route::post('/admin/store', [empresarioController::class, 'store']);

    Route::get('/admin/estabelecimento/create', [estabelecimentoController::class, 'create'])->name('estabelecimento.create');
    Route::get('/admin/estabelecimento/show', [estabelecimentoController::class, 'show'])->name('estabelecimento.show');
    Route::post('/admin/estabelecimento/store', [estabelecimentoController::class, 'store']);
    Route::put('/admin/estabelecimento/update/{id}', [estabelecimentoController::class, 'update'])->name('estabelecimento.update');
    Route::delete('/admin/estabelecimento/delete/{id}', [estabelecimentoController::class, 'delete'])->name('estabelecimento.delete');

    Route::get('/admin/evento/create', [eventoController::class, 'create']);
    Route::post('/admin/evento/store', [eventoController::class, 'store']);
    Route::delete('/admin/evento/delete/{evento}', [eventoController::class, 'delete'])->name('evento.delete');
    Route::put('/admin/evento/update/{evento}', [eventoController::class, 'update'])->name('evento.update');

    Route::get('/qrcode/{id}', [eventoController::class, 'getQrcode'])->name('qrcode');
});

Route::get('/', [homeController::class, 'index']);
Route::get('/saibamais', [saibamaisController::class, 'index']);
Route::get('/generos', [pageGenerosController::class, 'index']);

Route::get('/avaliacao/{id_evento}', [notaController::class, 'index']);
Route::post('/avaliacao/{id_evento}', [notaController::class, 'store']);

require __DIR__ . '/auth.php';