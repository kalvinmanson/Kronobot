<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->prefix('v1')->namespace('v1')->as('v1.')->group(function () {
  Route::resource('users', 'UserController');
  Route::resource('projects', 'ProjectController');
  Route::resource('projects.tasks', 'ProjectTaskController');
  Route::resource('projects.tasks.comments', 'ProjectTaskCommentController');
});
