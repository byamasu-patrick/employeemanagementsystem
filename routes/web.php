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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/post', function(){
    $data = [12,23,23,45];
    return response()->json([$data]);
});
Route::get('/admin/{any}', [App\Http\Controllers\AdminController::class, 'index']);
Route::get('{any}', function () {
    return view('index');
})->where('any', '.*');
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);