@extends('layouts.app')

@section('content')
    <div class="container">

@foreach($categories as $category)
<p>{{$category->id}}-{{$category->title}}</p>
@endforeach
</div>

@endsection
