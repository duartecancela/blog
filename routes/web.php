<?php
use App\Http\Controllers\PostsController;
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

Route::get('/posts/',[PostsController::class, 'index']);
Route::get('/posts/create', [PostsController::class, 'create']);
Route::get('/posts/store', [PostsController::class, 'store']);

//Route::get('/posts/create','PostsController@create');
//Route::post('/posts/store','PostsController@store');
//Route::get('/posts/{post}','PostsController@show');
//Route::get('/posts/{post}/edit','PostsController@edit');
//Route::delete('/posts/{post}','PostsController@index');

