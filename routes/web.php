<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/about', 'about')->name('about');

Route::view('/services', 'services')->name('services');

Route::view('/services/website-development', 'services.website-development')
    ->name('services.website-development');

Route::view('/services/software-development', 'services.software-development')
    ->name('services.software-development');

Route::view('/services/ui-ux-design', 'services.ui-ux-design')
    ->name('services.ui-ux-design');

Route::view('/services/seo-digital-growth', 'services.seo-digital-growth')
    ->name('services.seo-digital-growth');

Route::view('/services/data-analytics', 'services.data-analytics')
    ->name('services.data-analytics');

Route::view('/services/digital-transformation', 'services.digital-transformation')
    ->name('services.digital-transformation');

Route::get('/projects', function () {
    return view('projects.index');
    })->name('projects.index');

Route::get('/projects/apmdc-corporate-website', function () {
    return view('projects.apmdc-corporate-website');
})->name('projects.apmdc-corporate-website');

Route::get('/projects/apmdc-hrms', function () {
    return view('projects.apmdc-hrms');
})->name('projects.apmdc-hrms');

Route::get('/projects/apmdc-procurement-system', function () {
    return view('projects.apmdc-procurement-system');
})->name('projects.apmdc-procurement-system');


Route::view('/contact', 'contact')->name('contact');


Route::view('/blog', 'blog')->name('blog');