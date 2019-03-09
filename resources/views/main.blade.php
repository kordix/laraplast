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
          <p class="text">{{substr($new->text,0,400).'...'}}</p>

          {{-- <p class="text">{{substr($new->text,0,500).'...'}}</p> --}}
      </div>

     @endforeach
 </div>

    </section>

    <section>
        <h1 style="text-align:center">Realizacje</h1>
        <div class="krecha my-3" style="width:120px"></div>

    <div class="container">

            <div class="row" id="galeria">
                <a href="http://www.vetrex.slupsk.pl/wp-content/uploads/2017/12/WP_20170620_001-193x193.jpg" data-toggle="lightbox" data-gallery="galeria"><img src="http://www.vetrex.slupsk.pl/wp-content/uploads/2017/12/WP_20170620_001-193x193.jpg" alt=""> </a>
                <a href="http://www.vetrex.slupsk.pl/wp-content/uploads/2017/12/WP_20170620_003-193x193.jpg" data-toggle="lightbox" data-gallery="galeria"><img src="http://www.vetrex.slupsk.pl/wp-content/uploads/2017/12/WP_20170620_003-193x193.jpg" alt=""> </a>
                 <a href="http://www.vetrex.slupsk.pl/wp-content/uploads/2017/12/WP_20170620_005-193x193.jpg" data-toggle="lightbox" data-gallery="galeria"><img src="http://www.vetrex.slupsk.pl/wp-content/uploads/2017/12/WP_20170620_007-193x193.jpg" alt=""></a>
                 <a href="http://www.vetrex.slupsk.pl/wp-content/uploads/2017/12/WP_20170620_007-193x193.jpg" data-toggle="lightbox" data-gallery="galeria"><img src="http://www.vetrex.slupsk.pl/wp-content/uploads/2017/12/WP_20170620_009-193x193.jpg" alt=""></a>
                 <a href="http://www.vetrex.slupsk.pl/wp-content/uploads/2017/12/WP_20170620_011-193x193.jpg" data-toggle="lightbox" data-gallery="galeria"><img src="http://www.vetrex.slupsk.pl/wp-content/uploads/2017/12/WP_20170620_011-193x193.jpg" alt=""></a>

            </div>

    </div>
    </section>

@endsection

@section('scripts')
    <script type="text/javascript">
        console.log('FSAFASFFSD');
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js" defer></script>

    <script defer>
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                    event.preventDefault();
                    $(this).ekkoLightbox();
                    console.log('FDSAFDS');
                });
    </script>
@endsection
