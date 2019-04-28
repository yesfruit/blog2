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

Route::get('/', function () {
	// '/' 요청이 오면 function으로 싸진 Closer가 동작한다.
	// view라는 함수 안에 'welcome'이라는 인자를 넘겨서 반환된 값을 다시 반환.
	// 'welcome'은 resources/views/welcome.blade.php
    return view('welcome');
    // return 'Hello World';
    // return View::make('welcome');
});

Route::get('/Articles', function() {
	return view('Articles');
});

Route::get('/Contact', function() {
	return view('Contact');
});

Route::get('/Home', function () {
    return view('welcome');
});
// Route::get('/', 'HomeController@index');
// 2/13-16:03 아직 controller 안만들었기때문에 

Route::get('/articles/{post_name}', 'PostsController@show');
