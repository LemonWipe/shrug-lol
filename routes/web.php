<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamsBotController;

Route::post('/messages', [TeamsBotController::class, 'handleMessages'])->name('lol.shrug'); //message handler

Route::get('/', function(){echo '¯\_(ツ)_/¯';})->name('home'); //home
Route::get('/messages', function(){echo '¯\_(ツ)_/¯';})->name('lol.fail'); //instead of an error
Route::get('/privacy', function(){echo '¯\_(ツ)_/¯';})->name('privacy'); //privacy policy
Route::get('/terms', function(){echo '¯\_(ツ)_/¯';})->name('terms'); //terms of use