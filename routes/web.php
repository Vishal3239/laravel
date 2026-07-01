<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ViewController;
// use GrahamCampbell\ResultType\Success;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/profile', function () {
    return view('profile');
});

Route::get('home',function(){
    return view('home')->with('success','home page open successfully');
});

Route::get('about',function(){
    return view('about')->with('success','about page open seccessfully');
});
// Route::get('/about/{name}',function($name){
//     return view('about',['name'=>$name]);
// });

Route::get('contact',function(){
    return view('contact')->with('success','contact page open successfully');
});

// Route::redirect('/vishal','/home');
Route::get('get',[UserController::class,'gets']);
// Route::get('/add',[UserController::class,'add']);
// Route::get('/access/{name}',[UserController::class,'getName']);

Route::get('welcome',[ViewController::class,'welcome']);

Route::get('/test',function(){
    return view('test');
});

