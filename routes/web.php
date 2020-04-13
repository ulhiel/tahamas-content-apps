<?php

use App\Http\Controllers\HomeController;
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

//This line of code makes history mode on vue router works
if ( ! request()->ajax() ) {
    Route::get('/{vue?}', 'HomeController@index')->where('vue', '[\/\w\.-]*');
}

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('{path}', 'HomeController@index')->where( 'path', '([A-z\d-\/_.]+)?' );