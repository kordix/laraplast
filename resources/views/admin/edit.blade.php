@extends('layouts.admin')

@section('content')
  <div class="container">

<h1>Edytuj artykuł</h1>
<div class="col-md-5">

<form class="" action="{{route('update',$text->id)}}" method="post">
  {{csrf_field()}}
  {{method_field('PATCH')}}
  <div class="form-group">

<label for="title">Tytuł</label>
<input type="text" name="title" value="{{$text->title}}" class="form-control">
</div>
<div class="form-group">

<label for="text">Treść</label>
<textarea name="text" rows="8" cols="80">{{$text->text}}</textarea>
</div>

<div class="form-group" style="display:none">

<label for="text">Opis (opcjonalne)</label>
<textarea name="description" rows="8" cols="80"> </textarea>
</div>

<label for="category_id">Kategoria</label>
<select class="form-control" name="category_id">
    @foreach($categories as $category)
        <option value="{{$category->id}}" @if($category->id==3)selected @endif>{{$category->title}}</option>
    @endforeach
</select>

<button type="submit" class="btn btn-primary">Zatwierdź</button>
</form>
</div>
</div>

@endsection
