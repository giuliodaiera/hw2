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

/* Utilizziamo Laravel per non mischiare 
il controller (chi gestisce la richiesta) 
con la view(ovvero come visualizziamo la richiesta) */

Route::get('/', function () {
    return redirect('login');
});

Route::get('login', 'LoginController@login');

//visto che i dati sono mandati tramite POST,
//per gestire questi dati ci servirà una route
//sempre al login ma che utilizza come metodo POST.

Route::post('login', 'LoginController@login_post');

Route::get('logout', 'LoginController@logout');


Route::get('registerView', 'RegisterController@view');
Route::post('register', 'RegisterController@create');
Route::get('register_checkEmail/{email}', 'RegisterController@checkEmail');
Route::get('register_checkUsername/{username}', 'RegisterController@checkUsername');


Route::get('home', 'HomeController@home');
Route::get('profile', 'ProfileController@profile');


Route::get('addPostView', 'AddPostController@view');
Route::post('create_post', 'AddPostController@addPostCreate');


Route::get('searchView', 'SearchController@view');
Route::post('search', 'SearchController@methodSearch');


Route::get('post', 'PostController@post');


Route::post('add_like', 'LikesController@methodAddLike');
Route::post('remove_like', 'LikesController@methodRemoveLike');
Route::post('view_likes', 'LikesController@methodViewLikes');

Route::post('add_comment', 'CommentsController@methodAddComment');
Route::post('comments', 'CommentsController@methodComment');
Route::post('num_comments', 'CommentsController@methodNumComment');

Route::get('api_rest', 'ApiRestController@view');