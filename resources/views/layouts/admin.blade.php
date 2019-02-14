<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>@yield('title', 'doorplast kopia')</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="{{ asset('js/app.js') }}" defer></script>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/style.css')}}">

</head>
<body>



<div class="container">
<nav id="navbar" class="navbar navbar-expand-md navbar-light">

<a class="navbar-brand" href="#"><img src="http://www.vetrex.slupsk.pl/wp-content/themes/vetrex/images/header_top_logo_doorplast.png" alt=""></a>
<a class="navbar-brand" href="#">ADMINISTRACJA</a>

<div class="collapse navbar-collapse">
<ul class="navbar-nav ml-auto" style="margin-right:20px">
<li class="nav-item"><a href="#" class="nav-link">Strona</a></li>
</ul>
@guest @else
<ul class="navbar-nav mr-auto">
  <li class="nav-item"><a href="#" class="nav-link">Dodaj Artykuł</a> </li>
</ul>
@endguest
</div>
</nav>
</div>
<div class="container">

@if($flash=session('message'))
<div class="alert alert-success col-md-5">{{$flash}}</div>
@endif

@yield('content')
</div>

</body>
</html>
