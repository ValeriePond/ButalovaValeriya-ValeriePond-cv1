<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use app\Models\post;
use app\Models\contacts;

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

Route::get('/skills', function () {
    return view('skills');
});

Route::get('/projects', function () {
    return view('projects');
});

Route::get('post/create', function(){
    DB::table('posts')->insert([
        'title' =>'Valerie',
        'body' =>'here you will see story'
    ]);
});

Route::get('blog/index', 'App\Http\Controllers\BlogController@index');

Route::get('blog/create', function(){
    return view('blog.create');
});

Route::post('blog/create', 'App\Http\Controllers\BlogController@store')->name('add-post');

Route::get('blog/{id}', 'App\Http\Controllers\BlogController@get_post');

Route::get('/contacts', function(){
    return view('blog.contacts');
});

Route::post('/contacts', 'App\Http\Controllers\ContactsController@contact')->name('contact-form');

Route::post('/', 'App\Http\Controllers\ContactsController@contact')->name('contact-form');