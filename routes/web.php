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
    return view('welcome');
});

Route::get('/showdetail/{name}/{age}/{text}', function ($name,$age,$text) {
    return "สวัดดี $name คุณมีอายุ $age ปี และคุณพูดว่า $text";
});

Route::get("/บวกเลข/{num1}/{num2}",function ($num1, $num2){
    return $num1 + $num2;

});
