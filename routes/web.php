<?php
//phpinfo();
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

Route::get('/hello/{name}', function (string $name) {
   return <<<php
        <h1> Hello $name </h1>
   php;
});

Route::get('/info/', function () {
    return <<<php
        <h1>Info Projects</h1>
    php;
});

Route::get('/news/', function () {
    return <<<php
        <h1>Info News</h1>
    php;
});

