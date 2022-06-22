<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OmrEntryController;

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

Route::get('/search-student', [OmrEntryController::class, 'searchStudent'])->name('search-student');
Route::post('/confirm-student', [OmrEntryController::class, 'confirmPage'])->name('confirm-student');