<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Text;

class MainController extends Controller
{
    public function main()
    {
        $news = Text::where('category_id', '=', 2)->get();
        return view('main', compact('news'));
    }
}
