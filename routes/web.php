<?php

use App\Http\Controllers\empresarioController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\saibamaisController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\pageGenerosController;
use App\Http\Controllers\notaController;
use Illuminate\Support\Facades\Route;



Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', [homeController::class,'index']);
Route::get('/saibamais', [saibamaisController::class,'index']);
Route::get('/generos', [pageGenerosController::class,'index']);



Route::get('/admin/store', [empresarioController::class, 'store'])->name('admin.store');

Route::put('/admin/update', [empresarioController::class,'update'])->name('admin.update');


Route::get('/avaliacao/{id_evento}', [notaController::class, 'index']);
Route::post('/avaliacao/{id_evento}', [notaController::class, 'store']);


require __DIR__.'/auth.php';
