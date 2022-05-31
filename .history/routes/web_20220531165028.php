<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
// AuthorController にアクセス。

Route::get('/', [AuthorController::class, 'index']);