<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    function index()
    {

        // return "Hello World";
        // $berita = DB::table('posts')->get();
        $users = DB::table('posts')->orderby('created_at', 'desc')->get();
        return view('welcome', ['data' => $users]);
    }
    public function detail($id)
    {
        $article = DB::table('posts')->where('id', $id)->first();
        return view('detailpost', ['data' => $article]);
    }
}
