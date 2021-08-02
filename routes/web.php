<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoriesController;
use App\Http\Controllers\FeedbackController;

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
    return view('home');
});
Route::post('/feedbacks',[FeedbackController::class,'create']);


Route::get('/feedback',[FeedbackController::class,'show']);
Route::get('/write_feedback',function (){
  return view('write_feedback');
});
Route::get('/stories',[StoriesController::class,'show']);
Route::get('/write',[StoriesController::class,'create']);
Route::get('/about',function (){
  return view('about');
});
Route::get('/write',function (){
  return view('/write');
});
Route::post('/save',[StoriesController::class,'create']);
Route::get('/story_title',[StoriesController::class,'index']);
Route::get('/stories' ,[StoriesController::class,'show']);
