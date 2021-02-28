<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use app\Models\post;

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
    DB::table('post')->insert([
        'title' =>'Valerie',
        'body' =>'here you will see story'
    ]);
});

Route::get('post', function(){
    $post = post::find(1);
    return $client;
});