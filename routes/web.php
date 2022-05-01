<?php
//phpinfo();
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\User\AutorizationController;
use App\Http\Controllers\CategoryController;

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

//Route::get('/', function () {
//    return view('welcome');
//});
//hw-1
//Route::get('/hello/{name}', function (string $name) {
//   return <<<php
//        <h1> Hello $name </h1>
//   php;
//});
//
//Route::get('/info/', function () {
//    return <<<php
//        <h1>Info Projects</h1>
//    php;
//});
//
//Route::get('/news/', function () {
//    return <<<php
//        <h1>Info News</h1>
//    php;
//});

//Route::get('/', [HomeController::class, 'index']);
Route::get('/admin', [IndexController::class, 'index']);
Route::get('/user', [AutorizationController::class, 'index']);
//
//Route::get('/cat', [CategoryController::class, 'getCategory']);


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/news', [NewsController::class, 'index'])->name('news');
Route::get('/news/category{id}', [NewsController::class, 'category'])->where('id', '\d+')->name('news.category');
Route::get('/news/category{idCategory}/news{id}', [NewsController::class, 'show'])->where(['idCategory' => '\d+', 'id' => '\d+'])->name('news.show');


//Route::get('/category', [\App\Http\Controllers\CategoryController::class, 'getCategory']);
// будет использоваться последний роут
//Route::get('/test', [IndexController::class, 'test1']);
//Route::get('/test', [IndexController::class, 'test2']);
//Route::get('/news', [NewsController::class, 'news'])
//    -> name('news');
//Route::get('/news/{id}', [NewsController::class, 'newsOne'])
//    -> name('newsOne');
