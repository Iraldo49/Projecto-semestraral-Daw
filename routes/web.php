<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgendarController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contacto', function () {
    return view('pages/contacto');
});
Route::get('/estudio', function () {
    return view('pages/estudio');
});
Route::get('/shoots', function () {
    return view('pages/shoots');
});
Route::get('/casamento', function () {
    return view('pages/casamento');
});
Route::get('/sobre', function () {
    return view('pages/sobre');
});


Route::get('/servico', function () {
    return view('pages/servico');
});


Auth::routes();

Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');

Route::get('/perfil', function () {
    return view('perfil');
});

// Route::get(' /agendar/{id}',[AgendarController::class, 'show'])->name('agendar.show');

// Route::get(' /agendar/{id}',[AgendarController::class, 'edit'])->name('agendar.edit');

Route::get('agendar/edit/{id}', [AgendarController::class, 'edit']);
Route::get('agendar/show/{id}', [AgendarController::class, 'show']);
Route::put('/agendar/update/{id}', [AgendarController::class, 'update']);

Route::resource("/agendar", AgendarController::class); 

Route::get('/sessao', function () {
    return view('sessao');
});

