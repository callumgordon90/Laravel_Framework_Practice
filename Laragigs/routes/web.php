<?php

use Illuminate\Http\Request;
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

//here 'view' refers to the blade folder: resources>views>welcome.blade.php
Route::get('/', function () {
    return view('listings', [
        'heading'=>'Latest Listings'
    ]);
});

//new endpoint practice with get request and response wrappers
Route::get('/hello', function(){
    return response("<h1>hello world!</h1>", 200)
        ->header('Content-Type', 'text/plain');
});


//created another endpoint with the get method, but with the endpoint directory 'posts/{id}'
// added 'where' constraint
Route::get('posts/{id}', function($id){
    return response('Post ' . $id);
})->where('id', '[0-9]+');



//search endpoint
Route::get('/search', function(Request $request) {
    
    dd($request->name . ' ' . $request->city);
});