<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
// Author

Route::get('/', [AuthorController::class, 'index']);