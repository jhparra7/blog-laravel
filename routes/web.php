<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\ContactanosController;

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

Route::get('/', HomeController::class)->name('home');

/* Route::controller(CursoController::class)->group(function(){
    
    Route::get('cursos', 'index')->name('cursos.index');

    Route::get('cursos/create', 'create')->name('cursos.create');
    
    Route::post('cursos', 'store')->name('cursos.store');
    
    Route::get('cursos/{curso}',  'show')->name('cursos.show');
    
    Route::get('cursos/{curso}/edit',  'edit')->name('cursos.edit');
    
    Route::put('cursos/{curso}',  'update')->name('cursos.update');

    Route::delete('cursos/{curso}',  'destroy')->name('cursos.destroy');
}); */

Route::resource('cursos',CursoController::class);

// Cambiamos la ruta por asignaturas, y el parametro asignaturas por cursos
//Route::resource('asignaturas',CursoController::class)->parameters(['asignaturas'=>'cursos'])->names('cursos');

Route::view('nosotros','nosotros')->name('nosotros');

/* Route::get('contactenos', function(){

    Mail::to('parra.jesus@gmail.com')->send(new ContactanosMailable);

    return 'Mensaje enviado ... ';

})->name('contactenos'); */

Route::controller(ContactanosController::class)->group(function(){
 
    Route::get('contactanos', 'index')->name('contactanos.index');

    Route::post('contactanos', 'store')->name('contactanos.store');

});