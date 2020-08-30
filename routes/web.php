<?php
use Illuminate\Http\Request;
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
Route::resource('/cv', 'cvResourceController');
// Route::put('/cv/{cv}/complete', 'cvResourceController@complete')->name('cv.complete');
// Route::get('/cvs', 'cvController@index');
// Route::get('/cvs/create','cvController@create');
// Route::post('/cvs/create','cvController@store');
// Route::get('/cvs/edit','cvController@edit');
Route::post('/upload', 'UserController@uploadAvatar');
Route::get('/', 'UserController@welcome');
Route::get('/user','UserController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
