<?php
// DBクラスの記載
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
// 作った AuthorController にアクセス。

Route::get('/', [AuthorController::class, 'index']);