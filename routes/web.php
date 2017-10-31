<?php

/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
  | This file is where you may define all of the routes that are handled
  | by your application. Just tell Laravel the URIs it should respond
  | to using a Closure or controller method. Build something great!
  |
 */

Route::get('/', function () {
    return redirect()->route('system.dashboard');
});
Route::get('log-viewer', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');


/** Will be removed later and placed in evaluation */


