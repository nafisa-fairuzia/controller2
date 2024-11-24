<?php 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController;

// Route untuk resource tanpa fungsi show
Route::resource('photo', PhotoController::class)->except(['show']);
