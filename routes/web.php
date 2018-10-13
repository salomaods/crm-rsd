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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin.index', ['as'=>'admin', 'middleware'=>'role:administrador','uses'=> function(){
    return view ('admin.index');
}
]);

Route::resource ('role', 'RoleController');
Route::resource ('user', 'UserController');

Route::get('/home/cadastro-cliente', 'HomeController@cadastro_cliente')->name('cadastro-cliente');

Route::get('/logout', function(){
    Auth::logout();
    return Redirect::to('login');}
);

Route::get('/', function () {
    return Redirect::to('login');
});
