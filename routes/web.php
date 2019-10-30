<?php



Route::get('/', function () {
    return view('home');
});





Route::group(["middleware"=>"auth"],function(){
    Route::get('/todo',TodoController::class . "@index");
});

Auth::routes();
