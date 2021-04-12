<?php

use App\Http\Controllers\ShiftController;
use App\Http\Controllers\TimetableController;
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
Route::middleware(['auth'])->group(function () {
    Route::get('/', [TimetableController::class, 'home']);
    Route::get('rooster', [TimetableController::class, 'index'])->name('schedule');
    Route::get('shift/{shift}/trade', [ShiftController::class, 'trade'])->name('shift.trade');
    Route::get('shift/{shift}/trade/{employee}', [ShiftController::class, 'tradeRequest'])->name('shift.trade.request');
    
    
    Route::get('/collegas', function () {
        return view('colleagues');
    })->name('colleagues');
    Route::get('/account', function () {
        return view('account');
    })->name('account');
});