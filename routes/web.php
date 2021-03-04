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

Route::get('/insert', function() {
	DB::insert("insert into table_student(Name, Date_of_birth, GPA, Advisor) values('Batyrkhan','2002-10-27', 4.0, 'Zhangir')");
});
