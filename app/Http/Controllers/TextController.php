<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Text;

class TextController extends Controller
{
    //

    public function create(){
      return view('admin.create');
    }

    public function store(Request $request){
      Text::create($request->all());
      session()->flash('message','Dodano artykuł');
      return back();
    }

    public function index(){
      $articles = Text::all();
      return view('admin.index',compact('articles'));
    }
}
