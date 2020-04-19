<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articles;

class ArticlesController extends Controller
{
    public function index() {
        $title = "Articles";
        $articles = Articles::get();
        return view('admin.articles', compact('articles','title'));
    }

    public function create()
    {
        $title = "Create Article";
        return view('admin.articlescreate',compact('title'));
    }

    public function show()
    {
        return view('admin.articlesshow');
    }

    public function store() {

        $data = request()->validate([
            'title' => ['required', 'unique:articles'],
            'content' => ['required']
        ]);

        Articles::create([
            'title' => $data['title'],
            'url' => str_slug($data['title']),
            'author_id' => '1',
            'content' => $data['content'],
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return redirect()->route('articles.index');
    }
}