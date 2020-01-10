<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('empresa','EmpresaController');



Route::get('/cancelar',function(){

    return redirect()->route('empresa.index')->with('cancelar','Acción Cancelada');

})->name('cancelar');

Route::get('/empresa/{id}/confirm','EmpresaController@confirm')->name('empresa.confirm');

Route::get('/empresa/{id}/download','EmpresaController@download')->name('empresa.download');