<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>@yield('title', 'doorplast kopia')</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="{{ asset('js/app.js') }}" defer></script>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" rel="stylesheet">
  
</head>
<body>



<div class="container">
<nav id="navbar" class="navbar navbar-expand-md navbar-light">

<a class="navbar-brand" href="#"><img src="http://www.vetrex.slupsk.pl/wp-content/themes/vetrex/images/header_top_logo_doorplast.png" alt=""></a>
<a class="navbar-brand" href="#"><img src="http://www.vetrex.slupsk.pl/wp-content/themes/vetrex/images/header_top_logo_vetrex.png" alt=""></a>

<div class="collapse navbar-collapse">
<ul class="navbar-nav ml-auto" style="margin-right:20px">
<li class="nav-item"><a href="#" class="nav-link">Strona główna</a></li>
<li class="nav-item"><a href="#" class="nav-link">O firmie</a></li>
<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Oferta
  </a>

  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</li>
<li class="nav-item"><a href="#" class="nav-link">Aktualności </a></li>
<li class="nav-item"><a href="#" class="nav-link">Realizacje </a></li>
<li class="nav-item"><a href="#" class="nav-link">Kontakt </a></li>
</ul>
@guest @else
<ul class="navbar-nav mr-auto">
  <li class="nav-item"><a href="#" class="nav-link">Dodaj Artykuł</a> </li>
</ul>
@endguest
</div>
</nav>
</div>

@yield('content')

</body>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js">

</script>
@yield('scripts')
</html>
