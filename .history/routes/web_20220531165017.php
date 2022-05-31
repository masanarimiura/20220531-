<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
// Au

Route::get('/', [AuthorController::class, 'index']);