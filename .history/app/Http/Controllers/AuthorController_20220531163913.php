<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// DBにアクセスしてDBクラスを使えるようにしてる

class AuthorController extends Controller
{
    public function index()
    {
        $items = DB::select('select * from authors');
        //DB::select('MySQLのコマンド')で、データベース内でMySQLのコマンドを使えるようにしてる。
        return view('index', ['items' => $items]);
        //$
    }
}
