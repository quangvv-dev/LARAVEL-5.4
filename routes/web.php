<?php

Auth::routes();
Route::group(['middleware' => 'checkStatus'], function() {
    Route::get('/','TeamsController@index');
    Route::resource('/teams','TeamsController'); 
});	
Route::get('/home/{lang}' ,function($lang){
    App::setlocale($lang);
    return view('home');
}

);