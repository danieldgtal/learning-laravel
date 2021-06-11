<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

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

// Route::get('/about',function(){
//   return "Welcome to the about page";

// });

// Route::get('/contact/{id}/{name}', function ($id,$name){
//   return "Welcome to laravel contact ". $id. " " .$name;

// });
// Route::get('admin/post/example', array( 'as' => 'admin.home', function(){

//   $url = route('admin.home'); //outputs the full url . can also be checked using cmd `php artisan route route: list`
//   return "This is the url ". $url;

// }));

Route::get('/post/{id}', [PostsController::class, 'index']);
Route::resource('posts','PostsController'); // Deprecated
Route::get('/contact','PostsController@contact'); //Deprecated
Route::get('/showPost',[PostsController::class, 'show_post']);