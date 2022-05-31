<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// DBにアクセスできるようにしてる

class AuthorController extends Controller
{
    public function index()
    {
        $items = DB::select('select * from authors');
        return view('index', ['items' => $items]);
    }
}
