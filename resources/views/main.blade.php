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
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
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
      <div class="krecha"></div>
    </section>

@endsection
