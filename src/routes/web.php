<?php
use Illuminate\Http\Request;
use Gad\Contact\Http\Controllers\ContactController;

Route::get('contact',[ContactController::class, 'index']);

Route::post('contact',[ContactController::class, 'send'])->name('contact');