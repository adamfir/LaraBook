<?php

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

Route::get('/home', function () {
    return view('pages.home');
})->middleware('auth');
Route::get('/', function () {
    return redirect('/login');
});
Route::get('/register', function () {
    return view('pages.register');
});
Route::get('/login', function () {
    return view('pages.login');
});
Auth::routes();

Route::post('/home', 'StatusController@create')->name('buatStatus')->middleware('auth');
Route::post('/home/editStatus', 'StatusController@edit')->name('editStatus');
Route::post('/home/hapusStatus', 'StatusController@hapus')->name('hapusStatus');
Route::post('/home/createComment', 'CommentController@create')->name('buatKomentar');
Route::post('/home/like', 'LikeController@like')->name('like');
Route::post('/home/deleteComment', 'CommentController@delete')->name('hapusKomentar');