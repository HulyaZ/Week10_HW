<?php


use Illuminate\Support\Facades\Route;


Route::view('/home','front.home')->name('home');
Route::view('/about','front.about')->name('about');
Route::view('/detail','front.post_detail')->name('detail');
Route::view('/blog','front.blog')->name('blog');
Route::view('/contact','front.contact')->name('contact');


