<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
Route::group(['namespace'=>'global\contact\Http\Controllers'],function(){
    Route::get('contact','ContactController@index')->name('contact');
    Route::post('contact','ContactController@send');
});


