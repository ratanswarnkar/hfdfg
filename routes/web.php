<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/portfolio', function () {
    return view('portfolio');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/projects/maybach', function () {
    return view('projects.maybach');
});

Route::get('/projects/sun', function () {
    return view('projects.sun');
});
Route::get('/projects/nextwise', function () {
    return view('projects.next');
}); 

Route::get('/projects/3g-water-technology', function () {
    return view('projects.water');
});

Route::get('/director', function () {
    return view('director');
});

Route::get('/services/service1', function () {
    return view('services.service1');
});
Route::get('/services/service2', function () {
    return view('services.service2');
});
Route::get('/services/service3', function () {
    return view('services.service3');
});
Route::get('/services/service4', function () {
    return view('services.service4');
});
Route::get('/services/service5', function () {
    return view('services.service5');
});     
Route::get('/services/service6', function () {
    return view('services.service6');
});

Route::get('/blogs/blog1', function () {
    return view('blogs.blog1');
});

Route::get('/blogs/blog2', function () {
    return view('blogs.blog2');
});

Route::get('/blogs/blog3', function () {
    return view('blogs.blog3');
});

