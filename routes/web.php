<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

  
Route::get("create",[QuestionController::class,'create']);
Route::get("createanswer",[QuestionController::class,'createAnswer']);
Route::post("createanswer",[QuestionController::class,'answerStore']);
Route::post("create",[QuestionController::class,'store']);
Route::get("index",[QuestionController::class,'index']);
Route::get("viewall",[QuestionController::class,'viewAll']);

