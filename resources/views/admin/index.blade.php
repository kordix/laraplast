@extends('layouts.admin')

@section('content')
<table>
  <thead>
    <td>id</td>
    <td>text</td>
  </thead>

@foreach($articles as $article)
  <tr>
    <td>{{$article->id}}</td>
    <td>{{$article->text}}</td>
  </tr>

@endforeach

</table>


@endsection
