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
// inserir no banco raw sql queries
//  Route::get('/insert', function() {
     //DB::insert('insert into users (id, name, email, password) values (?, ?, ?, ?)', [2, 'Bauer', 'rafael@mail.com', 'flatron']);
    // Inserir padrão
     // $post = new Post;
    // $post->email = 'rafa@mail.com';
    // $post->name = 'Rafa';
    // $post->password = 'flatron';
    // $post->save();
     //Update
     // $post = Post::find(3);
    // $post->email = 'rafa@mail.com';
    // $post->name = 'Rafa';
    // $post->password = 'flatron';
    // $post->save();
// });

// Route::get('/read', function(){
//    $resultado =  DB::select('select * from users', [1]);
//     return var_dump($resultado);
// });
// Route::get('/update', function(){
//     $updated = DB::update('update users set email = "bauer@mail.com" where id = ?', [1]);
//     return $updated;
// });
// Route::get('find', function(){
//     // $users = Post::where('id', 2)->orderBy('id','desc')->take(1)->get();
//     // $users = Post::findOrFail(1);
//     return $users;
// });
// Route::get('/create', function () {
//     Post::create(['name'=>'Oliva', 'email'=>'oliva@mail.com', 'password'=>'flatron']);
// });
// Route::get('/update', function(){
//     Post::where('id',2)->update(['name'=>'Daniel','email'=>'daniel@mail.com']);
// });
// Route::get('/delete', function(){
//     $post = Post::find(1);
//     $post->delete();
// });
// Route::get('/delete', function(){
//     Post::destroy(2,4);
// });
// Route::get('/softdelete', function(){
//     Post::find(1)->delete();
// });
// Route::get('/readsoftDelete', function(){
//     $post = Post::withTrashed()->where('id', 1)->get();
//     $post = Post::onlyTrashed()->where('id', 1)->get();
//     return $post;
// });

use App\Post;

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin.index', ['as'=>'admin', 'middleware'=>'role:administrador','uses'=> function(){
    return view ('admin.index');
}
]);

Route::resource ('role', 'RoleController');

Route::get('/home/cadastro-cliente', 'HomeController@cadastro_cliente')->name('cadastro-cliente');

Route::get('/logout', function(){
    Auth::logout();
    return Redirect::to('login');}
);

Route::get('/', function () {
    return Redirect::to('login');
});


// Usar middleware para verificar a permissão do usuário, caso não estiver de acordo, retornar a devida
// Route::get('/cadastro-cliente', ['middleware'=>'roles', function(){
//     return "";
// }]);
