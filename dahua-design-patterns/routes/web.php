<?php

/*
 * 设计模式
 *
 * author 张帅
 */

Route::get('/', function () {
    return view('welcome');
});

Route::get('weather/{city}', 'WeatherController@show');

Route::any('transfer', 'TransferClueController@transferClue');

