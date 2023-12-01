<?php

use App\Http\Controllers\CrudConvocatoria;
use App\Models\Convocatoria;
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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('/convocatoria', CrudConvocatoria::class)->names([
        'index' => 'convocatoria',
        'create' => 'convocatoria',
        'store' => 'convocatoria',
        'show' => 'convocatoria',
        'edit' => 'convocatoria',
        'update' => 'convocatoria',
        'destroy' => 'convocatoria',
    ]);

    Route::get('/plan', function () {
        return view('plan');
    })->name('plan');

    Route::get('/documento', function () {
        return view('documento');
    })->name('documento');



    Route::get('/masinfo', function () {
        return view('masinfo');
    })->name('masinfo');

    Route::get('/formulario', function () {
        return view('formulario');
    })->name('formulario');

    Route::get('/formularioplan', function () {
        return view('formularioplan');
    })->name('formularioplan');


    Route::middleware(['auth:sanctum', 'verified'])->group(function () {
        Route::post('/guardar-postulacion', [TuControlador::class, 'guardarPostulacion'])->name('postulacion.guardar');
    });
});
