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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/psicologia', function(){
    return view('psicologia');
});

Route::get('/fisioterapia', function(){
    return view('fisioterapia');
});


Route::get('/nutricao', function(){
return view('nutricao');
});

Route::get('/findpsico', function(){
    return view('findpsico');
});


// Route::get('teste', 'TabelaTestesController@create');




    // Route::post('teste/store', function () {

    //     $teste = \App\Models\teste::create([
    //         'nome' => 'massive',
    //         'sobrenome' => 'assinacao',
    //         'sexo' => 'indefinido'
    //     ]);

    //     return \App\Models\teste::all();

    // });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/teste' , 'App\Http\Controllers\PacienteController@index');
Route::post('/psicologia/store' , 'App\Http\Controllers\PsicoController@store');
Route::get('paciente/create', 'App\Http\Controllers\PacienteController@create');
Route::post('/paciente/store', 'App\Http\Controllers\PacienteController@store');
Route::get('findpsico/store','App\Http\Controllers\PsicoController@store');
Route::post('/paciente/show', '\App\Http\Controllers\PacienteController@show');

