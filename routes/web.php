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
Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Route::resource('empresa','EmpresaController')->middleware('verified');

Route::get('/canceled', function () {
    return view('canceled');
});

Route::get('/success', function () {
    return view('success');
});

Route::get('/cancelar',function(){

    return redirect()->route('empresa.index')->with('cancelar','Acción Cancelada');

})->name('cancelar');


Route::get('/empresa/{id}/confirm','EmpresaController@confirm')->name('empresa.confirm')->middleware('verified');

Route::get('/empresa/download/{i}','EmpresaController@download')->name('empresa.download');

Route::get('/empresa/pay/$','EmpresaController@comprar')->name('empresa.comprar');