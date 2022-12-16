<?php

use App\Http\Controllers\ReportController;
use App\Http\Controllers\RunnerDetailsSave;
use Illuminate\Support\Facades\Route;

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




Route::get('/runnerDetails', function () {
    return view('index');
});


Route::post('/runnerDetailsSave',[RunnerDetailsSave::class,'submit',]);


Route::get('/runnersReport',[ReportController::class,'index','speed','duration'])->name('runnersReport');
