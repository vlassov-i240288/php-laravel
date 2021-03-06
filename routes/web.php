<?php
//phpinfo();
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\User\AutorizationController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\AddNewsController;
use App\Http\Controllers\AddAdminController;
use App\Http\Controllers\Admin\ParserController;


use App\Http\Controllers\Account\IndexController as AccountControler;
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

Route::group(['middleware'=>'auth'], function () {
    Route::get('/account', AccountControler::class)
        ->name('account');

    Route::group(['middleware'=>'admin'], function () {
        Route::get('/admin', [IndexController::class, 'index'])->name('admin.index');
    });


    Route::get('/user', [AutorizationController::class, 'index']);

    Route::get('/', [HomeController::class, 'index'])
        ->name('home');
    Route::get('/news/category{id}', [NewsController::class, 'newsList'])
        ->where('id', '\d+')
        ->name('news.category');
    Route::get('/news/category{idCategory}/news{id}', [NewsController::class, 'show'])
        ->where(['idCategory' => '\d+', 'id' => '\d+'])
        ->name('news.show');

    Route::match(['post', 'get'], '/formA', [FormController::class, 'formA'])
        ->name('formA');
    Route::match(['post', 'get'], '/formB', [FormController::class, 'formB'])
        ->name('formB');
    Route::match(['post'], '/add', [AddNewsController::class, 'add'])
        ->name('add');
    Route::match(['get'], '/addNews', [AddNewsController::class, 'addNews'])
        ->name('addNews');

    Route::get('/delNews/{id}', [AddNewsController::class, 'delNews'])
        ->name('delNews');

    Route::get('/addAdmin/{is_admin}', [AddAdminController::class, 'addAdmin'])
        ->name('addAdmin');

    Route::get('/parser', [ParserController::class, 'index'])
        ->name('parser');

});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Auth::routes();
//
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//
//Auth::routes();
//
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//
//Auth::routes();
//
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
