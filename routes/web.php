<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


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


Route::group(['prefix' => 'web'],function (){

    Route::get('/', [ProductController::class, 'index']);
    Route::get('/select', [ProductController::class, 'select'])->name('select');

});

/*Route::get('/web', function () {
    return view('product');
});*/