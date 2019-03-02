@extends('layouts.admin')

@section('content')
<table>
  <thead>
    <td>id</td>
    <td>text</td>
    <td>Kategoria</td>
  </thead>

@foreach($articles as $article)
  <tr>
    <td>{{$article->id}}</td>
    <td>{{substr($article->text,0,300).'...'}}</td>
    <td>{{$article->category->title}}</td>
    <td><a href="{{route('edit', $article->id)}}">Edytuj</a></td>
  </tr>

@endforeach

</table>


@endsection
