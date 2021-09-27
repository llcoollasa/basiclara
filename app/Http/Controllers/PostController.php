<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

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
                return view('posts.first', ['err' => false]);
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

    public function all()
    {
        // $articles = DB::select('select * from posts');

        // dd($articles);

        $articles = Post::all();
        // $articles = Post::limit(1)->get();

        // $articles = [
        //     [
        //         "id" => 1,
        //         "title" => "Break a leg!",
        //         "content" => "<p>Lorem ipsum dolor sit amet </p>consectetur adipisicing elit. Totam, dolor. Minima, accusamus praesentium iste tempora quod quisquam pariatur esse explicabo consectetur alias sapiente. Facere ducimus similique quae, laborum veniam exercitationem!"
        //     ],
        //     [
        //         "id" => 2,
        //         "title" => "Go jump in a lake!",
        //         "content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, dolor. Minima, accusamus praesentium iste tempora quod quisquam pariatur esse explicabo consectetur alias sapiente. Facere ducimus similique quae, laborum veniam exercitationem!"
        //     ],
        //     [
        //         "id" => 2,
        //         "title" => " You can’t fight the city hall.",
        //         "content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, dolor. Minima, accusamus praesentium iste tempora quod quisquam pariatur esse explicabo consectetur alias sapiente. Facere ducimus similique quae, laborum veniam exercitationem!"
        //     ]
        // ];

    
        return view('db_posts.all', compact('articles'));
    }


    public function store(Request $request) {

    //    dd(request('title'));

// dd($request->input('title'));

        $validatedData = $request->validate([
            'title' => ['required', 'max:255', 'min:3'],
            'content' => ['required'],
        ]);


        Post::create($validatedData);


        return redirect()->back();
    }
}
