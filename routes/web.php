<?php

use App\Http\Controllers\email_empresarioController;
use App\Http\Controllers\empresarioController;
use App\Http\Controllers\endereco_EnderecoEmpresarioController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\saibamaisController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\pageGenerosController;
use App\Http\Controllers\rede_socialController;
use App\Http\Controllers\telefone_empresarioController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', [homeController::class,'index']);
Route::get('/saibamais', [saibamaisController::class,'index']);
Route::get('/generos', [pageGenerosController::class,'index']);
Route::get('/avaliacao', function () {
    return view('avaliacao');
});



Route::get('/admin/store', [empresarioController::class, 'store'])->name('admin.store');

Route::put('/admin/update', [empresarioController::class,'update'])->name('admin.update');




require __DIR__.'/auth.php';
