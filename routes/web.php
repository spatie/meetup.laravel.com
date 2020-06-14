<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProposeTalkController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');
Route::get('propose-talk', [ProposeTalkController::class, 'index'])->name('proposeTalk');
