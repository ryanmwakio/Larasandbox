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

$posts=[
    1=>[
        "id"=>1,
        "title"=>"first post",
        "description"=>"First post description",
        "is_new"=>true,
        'has_comments'=>true,
    ],
    2=>[
        "id"=>2,
        "title"=>"second post",
        "description"=>"Second post description",
        "is_new"=>true,
    ],
    3=>[
        "id"=>3,
        "title"=>"third post",
        "description"=>"Third post description",
        'has_comments'=>false,
    ],
];

Route::view('/', 'home.index')->name("home.index");

Route::view('/contact','home.contact')->name("home.contact");


Route::get('/posts',function() use ($posts) {
    return view('posts.index',compact('posts'));
})->name("posts.index");


Route::get('/posts/{id}',function($id) use ($posts){
    if(!array_key_exists($id,$posts)){
        return abort(404);
    }
    return view('posts.show',['post'=>$posts[$id]]);
})->name('posts.show');
