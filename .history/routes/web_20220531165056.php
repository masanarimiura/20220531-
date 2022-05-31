<?php
// DBクラスの記載
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
// 作ったAuthorController にアクセス。

Route::get('/', [AuthorController::class, 'index']);