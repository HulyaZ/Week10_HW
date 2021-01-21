<?php


use Illuminate\Support\Facades\Route;


Route::view('/master','front.layouts.master')->name('master');
Route::view('/detail','front.post_detail')->name('detail');
Route::view('/blog','front.blog')->name('blog');

