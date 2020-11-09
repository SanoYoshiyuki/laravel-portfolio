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
    return redirect('login');
});

Route::get('/register', 'registerController@index');
Route::get('/register/infomation', 'registerController@infomation');
Route::post('/register', 'registerController@register');

Route::get('/login', 'loginController@index');
Route::post('/login', 'loginController@auth');

Route::get('/logout', 'homeController@logout');

Route::get('/home', 'homeController@index');

Route::get('/ticket', 'ticketController@index');

Route::get('/lottery', 'lotteryController@index');
Route::post('/lottery', 'lotteryController@lottery');

Route::get('/transaction', 'transactionController@index');
Route::post('/cancel', 'transactionController@cancel');

Route::get('/mypage', 'myPageController@index');



Route::get('/admin/login', 'admin\adminUserController@login');
Route::post('/admin/login', 'admin\adminUserController@auth');

Route::group(['middleware' => ['auth.admin']], function () {
    Route::get('/admin', 'admin\adminUserController@index');
    Route::get('/admin/logout', 'admin\adminUserController@logout');
});
