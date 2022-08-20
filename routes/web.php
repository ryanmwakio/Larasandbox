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
    return view('home.index');
})->name("home.index");

Route::get('/contact',function(){
    return view("home.contact");
})->name("home.contact");

$posts=[
    1=>[
        "title"=>"first post",
        "description"=>"First post description"
    ],
    2=>[
        "title"=>"second post",
        "description"=>"Second post description"
    ],
    3=>[
        "title"=>"third post",
        "description"=>"Third post description"
    ],
];

Route::get('/posts',function() use ($posts) {
    return $posts;
})->name("posts.index");

Route::get('/posts/{id}',function($id) use ($posts){

    if(!array_key_exists($id,$posts)){
        return abort(404);
    }

    return view('posts.show',['post'=>$posts[$id]]);
})->name('posts.show');
