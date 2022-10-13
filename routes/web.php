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
// Route::get('/about', function () {
//     $req1=request('req');
    

//     return "about" . strip_tags($req1) ;
// });
// Route::get('/Allproducts/{categories}/{subcategories}', function($categories=null,$subcategories=null) {

//     return $subcategories;
// });

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/all', function () {
    return view('all-posts');
});
