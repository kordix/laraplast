<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Text;
use App\Category;

class TextController extends Controller
{
    //

    public function create()
    {
        $categories = Category::all();

        return view('admin.create', compact('categories'));
    }

    public function store(Request $request)
    {
        Text::create($request->all());
        session()->flash('message', 'Dodano artykuł');
        return back();
    }

    public function index()
    {
        $articles = Text::with('category')->get();
        // dd($articles);
        return view('admin.index', compact('articles'));
    }

    public function edit($id)
    {
        $text = Text::find($id);
        $categories = Category::all();
        return view('admin.edit', compact('text', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $text = Text::find($id)->update($request->all());
        session()->flash('message', 'Zmieniono artykuł');
        return back();
    }
}
