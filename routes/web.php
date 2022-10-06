<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActivitiesController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/v1')->group(function () {
    Route::post('activities-post', [ActivitiesController::class, 'store']);
    Route::post('activities/{activity_id}/items', [ActivitiesController::class, 'storeLists']);

    Route::get('activities', [ActivitiesController::class, 'show']);
    Route::get('activities/{activity_id}',  [ActivitiesController::class, 'getActivityById']);

    Route::patch('activities/{activity_id}',  [ActivitiesController::class, 'activityUpdate']);
    Route::patch('activities/{activity_id}/items/{item_id}', [ActivitiesController::class, 'itemUpdate']);


    Route::delete('activities/{activity_id}',  [ActivitiesController::class, 'activityDelete']);
    Route::delete('activities/{activity_id}/items/{item_id}', [ActivitiesController::class, 'itemDelete']);
});
