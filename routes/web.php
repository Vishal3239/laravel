<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ViewController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('home',function(){
//     return view('home');
// });

// Route::get('about',function(){
//     return view('about');
// });
// Route::get('/about/{name}',function($name){
//     return view('about',['name'=>$name]);
// });

// Route::get('vishal',function(){
//     return view('contact');
// });

// Route::redirect('/vishal','/home');
Route::get('get',[UserController::class,'gets']);
// Route::get('/add',[UserController::class,'add']);
// Route::get('/access/{name}',[UserController::class,'getName']);

Route::get('welcome',[ViewController::class,'welcome']);

