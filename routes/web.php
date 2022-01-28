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

Route::get('/teste', function(){
    return view('teste');
});

Route::get('/psicologia', function(){
    return view('psicologia');
});


// Route::get('teste', 'TabelaTestesController@create');
 Route::post('/teste/store' , 'App\Http\Controllers\TabelaTestesController@store');
 Route::post('/psicologia/store' , 'App\Http\Controllers\PsicoController@store');




    // Route::post('teste/store', function () {

    //     $teste = \App\Models\teste::create([
    //         'nome' => 'massive',
    //         'sobrenome' => 'assinacao',
    //         'sexo' => 'indefinido'
    //     ]);

    //     return \App\Models\teste::all();

    // });
