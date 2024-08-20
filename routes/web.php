<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/About', function () {
    return view('about');
});
Route::get('/Projects', function () {
    return view('project');
}); 
Route::get('/Experience', function () {
    return view('experience');
}); 
Route::get('/Contact', function () {
    return view('contact');
});