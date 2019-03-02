<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request)
    {
        Category::create($request->all());
        session()->flash('message', 'dodano kategorię');
        return back();
    }

    public function index()
    {
        $categories = Category::all();
        return view('category.index', compact('categories'));
    }
}
