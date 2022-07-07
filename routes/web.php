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
Route::get('/', function () {
    return View('welcome');
})->name('homepage');

Route::get('/test', function () {
    return view('test');
})->name('test');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');
Route::get('/param/{id?}', function ($id=0) {
    return "User $id";
})
->name('parameter')
->whereNumber('id')
//->whereAlpha('id')
//->where('id','[0-9]+') // you can use regex like this or the one above
;