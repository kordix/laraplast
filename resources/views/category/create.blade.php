@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-5">

    <form class="" action="{{route('category.store')}}" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label for="title">Nazwa kategorii</label>
            <input type="text" name="title" class="form-control" value="">
            <button type="submit" class="btn btn-primary my-2">Zatwierdź</button>
        </div>
    </form>
</div>

</div>
@endsection
