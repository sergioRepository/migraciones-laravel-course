<?php

use App\Http\Controllers\Primercontroller;
use Illuminate\Routing\RouteBinding;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/test',[Primercontroller::class,'index']);

Route::get('/test2',[Primercontroller::class,'index2']);

Route::get('post/{var1}/{var2}',[Primercontroller::class,'post']);

//Route::resources('post',[Primercontroller::class])


//Route::get('/contact', function () {
   
    //$data = ['name' =>  'sergio' ];
    //return  view('contact', $data);
//})->name('contact');

//Route::get('/contact2', function () {
    //$data = ['name' =>  'Florez' ];
   // return  view('contact2', $data);  
//})->name('contact2');

