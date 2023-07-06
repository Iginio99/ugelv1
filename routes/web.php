<?php

use App\Http\Controllers\ActaController;
use App\Http\Controllers\ExpedienteController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\ResolucionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::controller(ExpedienteController::class)->group(function () {
    Route::get('/expedientes', 'index');
    Route::get('/add-expediente', 'create');
    Route::post('/add-expediente', 'store');
    //Route::get('/edit-expediente', 'store');
    Route::get('/edit-expediente/{expediente_id}','edit');
    //Route::get('/detail-docente/{docente_id}','detail');
    Route::put('/update-expediente/.{expediente_id}', 'update');
    Route::delete('/delete-expediente/{expediente_id}','destroy');
    Route::post('/find-expediente', 'buscar');
    Route::get('/pdf/{expediente_id}', 'generatePDF');
    //Route::post('/orders', 'store');
});

Route::controller(ResolucionController::class)->group(function () {
    Route::get('/resoluciones', 'index');
    Route::get('/add-resolucion', 'create');
    Route::post('/add-resolucion', 'store');
    //Route::get('/edit-expediente', 'store');
    Route::get('/edit-resolucion/{resolucion_id}','edit');
    //Route::get('/detail-docente/{docente_id}','detail');
    Route::put('/update-resolucion/.{resolucion_id}', 'update');
    Route::delete('/delete-resolucion/{resolucion_id}','destroy');
    Route::post('/find-resolucion', 'buscar');
    //Route::post('/orders', 'store');
});

Route::controller(ActaController::class)->group(function () {
    Route::get('/actas', 'index');
    Route::get('/add-acta', 'create');
    Route::post('/add-acta', 'store');
    //Route::get('/edit-expediente', 'store');
    Route::get('/edit-acta/{acta_id}','edit');
    //Route::get('/detail-docente/{docente_id}','detail');
    Route::put('/update-acta/.{acta_id}', 'update');
    Route::delete('/delete-acta/{acta_id}','destroy');
    Route::post('/find-acta', 'buscar');
    //Route::post('/orders', 'store');
});

Route::controller(RegistroController::class)->group(function () {
    Route::get('/terminos', 'terminos');
    Route::get('/clausula', 'clausula');
});

require __DIR__.'/auth.php';