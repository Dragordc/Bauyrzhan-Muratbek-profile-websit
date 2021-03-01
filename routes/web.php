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
Route::get('/aboutme',function(){
	return view('project');
});
Route::get('/skill',function(){
	return view('skill');
});
Route::get('/contact',function(){
	return view('contact');
});


/*Route::resource('posts','App\Http\Controllers\PostController');
Route::resource('student','App\Http\Controllers\StudentController',['parameters'=>['student'=>'admin_student']]);
Route::get('/cont',function(){
	return view('cont',['name'=>'John']);
});
Route::get('/insert',function() {
	DB::insert('insert into posts(title,body) values(?,?)',['Ыбырай Алтынсарин','Ыбырай Алтынсарин агартушы.']);
});
Route::get('/select',function() {
	$results = DB::select('select*from posts where id = ?',[1]);
	foreach ($results as  $posts) {
		echo "Title is: ".$posts->title;
		echo "<br>";
		echo "body is: ".$posts->body;
	}
});
Route::get('/update',function(){
	$updated = DB::update('update posts set title ="software tester" where id = ?',[1]);
	return $updated;
});
Route::get('/delete',function() {
	$deleted=DB::delete('delete from posts where id = ?',[2]);
	return $deleted;
});
use App\Models\Post;
Route::get('/read',function() {
	$posts = Post::all();
	foreach ($posts as $post) {
		# code...
		echo $post -> body;
		echo "<br>";
	}

});
Route::get('/basicupdate',function(){
	$post = Post::find(2);
	$post->title='Haseena';
	$post->body='Graphic Designer';
	$post->save();
});
Route::get('/delete',function() {
	$post = Post::find(2);
	$post->delete();
});

Route::get('/fund',function(){
	$posts = Post::where('id',2)->first();
	return $posts;
});
Route::get('/fand',function(){
	$posts = Post::where('id',1)->value('body');
	return $posts;
});*/
Route::get('/post/create',function(){
	$post = new Post;
	$post->title='Abai Kunanbayev';
	$post->body='Oiwyl';
	$post->save();
});
Route::get('/post',function () {
	$posts = Post::find(1);
	return $posts;
});



