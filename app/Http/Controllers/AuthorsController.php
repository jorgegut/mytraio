<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Authors;

class AuthorsController extends Controller
{
    public function index() {
        $title = "Authors";
        $authors = Authors::get();

        return view('admin.authors', compact('authors','title'));
    }

    public function create()
    {
        $title = "Create Author";
        return view('admin.authorscreate',compact('title'));
    }

    public function show()
    {
        return view('admin.blogpostsshow');
    }

    public function store() {

        $data = request()->validate([
            'name' => ['required', 'unique:authors'],
            'url' => ''
        ]);

        Authors::create([
            'name' => $data['name'],
            'url' => $data['url'],
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return redirect()->route('authors.index');
    }
}