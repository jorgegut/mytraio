<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;

class CategoriesController extends Controller
{
    public function index() {
        $title = "Categories";
        $categories = Categories::get();

        return view('admin.categories', compact('categories','title'));
    }

    public function create() {
        $title = "Create Category";
        return view('admin.categoriescreate',compact('title'));
    }

    public function store() {

        $data = request()->validate([
            'name' => ['required', 'unique:categories'],
        ]);

        Categories::create([
            'name' => $data['name'],
            'url' => str_slug($data['name']),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return redirect()->route('categories.index');
    }
}