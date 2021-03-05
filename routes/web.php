<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\table_student;
use Illuminate\Support\Facades\DB;

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

Route::get('/insert', function() {
	DB::insert("insert into table_student(Name, Date_of_birth, GPA, Advisor) values('Arman','2002-10-27', 3.0, 'Ualikhan')");
});

Route::get('/select', function(){
	$results=DB::select('select * from table_student where id = ?', [5]);
	foreach ($results as $table_student) {
		echo "Name is: ".$table_student->Name;
		echo "<br>";
		echo "Date_of_birth: ".$table_student->Date_of_birth;
		echo "<br>";
		echo "GPA: ".$table_student->GPA;
		echo "<br>";
		echo "Advisor: ".$table_student->Advisor;
	}
});

Route::get('/update', function(){
	$updated=DB::update('update posts set title = "software tester" where id = ?', [1]);
	return $updated;
});

Route::get('/delete', function() {
	$deleted=DB::delete('delete from posts where id=?', [5]);
	return $deleted;
});


Route::get('/read', function() {
	$table_student=table_student::all();
	foreach ($table_student as $table_student) {
		echo $table_student->name;
		echo "<br>";
 	}
});

Route::get('/find', function() {
	$table_student=table_student::find(2);
	return $table_student->name;
});

 Route::get('/basicupdate', function() {
 	$table_student=table_student::find(1);
 	$table_student->Name='Duman';
 	$table_student->Date_of_birth='2001-04-25';
 	$table_student->GPA=3.5;
 	$table_student->Advisor='Marzhan';
 	$table_student->save();
 });


 Route::get('/delete', function() {
 	$table_student = table_student::find(2);
 	$table_student->delete();
 });