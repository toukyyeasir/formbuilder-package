<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace'=>'Toukyyeasir\Form\Http\Controllers'], function(){

    Route::get('form', 'FormController@index')->name('form');

    Route::post('form','FormController@send');

});


