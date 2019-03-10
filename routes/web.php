<?php

/******************************************  Home Routes Start  ******************************************/
Route::get('/', ['uses' => 'HomeController@index', 'as' => 'homeIndex']);
Route::get('project', ['uses' => 'ProjectController@index', 'as' => 'projectIndex']);
/******************************************  Home Routes End  ******************************************/

