@extends('layouts.myapp')

@section('title')
Doorplast - strona główna
@endsection
@section('content')

@include('main.carousel')


  <section class="container">
      <h1 style="margin-top:30px;letter-spacing:2px" class="hpink">O FIRMIE</h1>
      <div class="krecha"></div>
      <p>
        {{App\Text::find(1)->text}}
      </p>
      <button class="mybutton2" type="button" name="button" style="display:block;margin:auto">CZYTAJ WIĘCEJ</button>
    </section>

    <section class="container">
      <h1 style="margin-top:30px;letter-spacing:2px" class="hdark">OFERTA</h1>
      <div class="krecha"></div>
      <p>
          {{App\Text::find(2)->text}}

      </p>
    </section>

    <section id="obrazki" class="container">
      <div class="row">
        <figure class="col-md-3 col-sm-6">
            <img src="images/icon1.png" class="d-flex mx-auto" alt="">
            <figcaption class="" style="text-align:center">Okna</figcaption>
        </figure>
        <figure class="col-md-3 col-sm-6">
          <img src="images/icon2.png" class="d-flex mx-auto" alt="">
          <figcaption>Drzwi zewnętrzne</figcaption>
        </figure>
        <figure class="col-md-3 col-sm-6">
          <img src="images/icon3.png" alt="" class="d-flex mx-auto" >
          <figcaption>Drzwi wewnętrzne</figcaption>
        </figure>
        <figure class="col-md-3 col-sm-6">
          <img src="images/icon4.png" alt="" class="d-flex mx-auto" >
          <figcaption>Bramy garażowe</figcaption>
        </figure>
      </div>
      <div class="row">
        <figure class="col-md-3 col-sm-6">
            <img src="images/icon5.png" class="d-flex mx-auto" alt="">
            <figcaption class="" style="text-align:center">Rolety</figcaption>
        </figure>
        <figure class="col-md-3 col-sm-6">
          <img src="images/icon6.png" class="d-flex mx-auto" alt="">
          <figcaption>Panele</figcaption>
        </figure>
        <figure class="col-md-3 col-sm-6">
          <img src="images/icon7.png" alt="" class="d-flex mx-auto" >
          <figcaption>Parapety</figcaption>
        </figure>
        <figure class="col-md-3 col-sm-6">
          <img src="images/icon8.png" alt="" class="d-flex mx-auto" >
          <figcaption>Klamki</figcaption>
        </figure>

      </div>

    </section>

    <section class="container" id="aktualnosci">
      <h1 style="margin-top:30px;letter-spacing:1.5px" class="hdark">AKTUALNOŚCI</h1>
      <div class="krecha my-3" style="width:120px"></div>
      <div class="row">

      @foreach($news as $new)
          <div class="col-md-4">

          <p class="title">{{$new->title}}</p>
          <div class="krecha krechapink my-2"></div>
          <p class="text">{{$new->text}}</p>

          {{-- <p class="text">{{substr($new->text,0,500).'...'}}</p> --}}
      </div>

     @endforeach
 </div>

    </section>

@endsection
