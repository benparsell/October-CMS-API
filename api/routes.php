<?php
use Cms\Classes\ComponentBase;
use RainLab\Pages\Classes\Router;
use Cms\Classes\Theme;

Route::get('/welcome', 'Inveigle\Api\Http\Controllers\WelcomeController@index');

Route::get('/getThemeAuthor', 'Inveigle\Api\Http\Controllers\WelcomeController@getAuthor');
