<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.all');
    }

    public function view($post)
    {
        switch ($post) {
            case 1:
                # code...
                return view('posts.first');
            case 2:
                # code...
                return view('posts.second');
            case 3:
                # code...
                return view('posts.third');

            default:
                # code...
                return redirect('/');
        }
    }
}
