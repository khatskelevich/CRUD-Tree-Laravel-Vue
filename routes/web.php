<?php


//Route::get('/', function(){
//    return view('index');
//});

Route::get('/', function () {
    return view('index');
});

Route::get('/employees', function() {
    return view('index');
});

Route::get('/structure', function(){
    return view('structure');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

