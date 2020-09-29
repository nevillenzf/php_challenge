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

Route::get('/', "PageController@main")->name("main");

Route::post('/upload', "FileController@parseFile");

Route::get('/search', "PageController@search")->name("search");
Route::get('/Search', "PageController@search");
Route::post('/search', "PageController@searchDB");

Route::get('/query', "PageController@query")->name("query");
Route::get('/Query', "PageController@query");
Route::post('/query', "PageController@queryAPI");

Route::fallback(function(){
    return "Hello u should turn back";
});
