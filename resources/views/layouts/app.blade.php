<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>RallyLegend Reunion</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script
  src="http://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <script src="{{asset('js/jquery-perso.js')}}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/ionicons.min.css') }}">
    <link href="{{ asset('css/all.css') }}">
    <link href="{{ asset('css/AdminLTE.min.css') }}">
    <link href="{{ asset('css/morris.css') }}">
    <link href="{{ asset('css/_all-skins.min.css') }}"> 
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css" type="text/css">
    <link href="{{ asset('css/agency.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{asset ('css/galerie.css')}}" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    @yield('css')
    <style> textarea { resize: none; } </style>
</head>
<body>
<!-- Navigation -->
@php
var_dump($_SERVER['REQUEST_URI'])  ;
@endphp
<div id='app'>
<nav class="navbar navbar-expand-lg navbar-dark navbar-shrink" id="mainNav">
  	    <div class="container">
  	      <a class="navbar-brand js-scroll-trigger" href="{{ url('/') }}">Rally Legend</a>
  	      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" 	aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
  	        Menue
  	        <i class="fas fa-bars"></i>
  	      </button>
  	      <div class="collapse navbar-collapse" id="navbarResponsive">
  	        <ul class="navbar-nav text-uppercase ml-auto">
  	          @if (Route::has('login'))
  	                    @auth
                          <li class="nav-item">
  	                        <a class="nav-link "  href="{{ url('/forums') }}">Espace adhérent</a>
  	                      </li>
                          <li class="nav-item" >
  	                          <a class="nav-link" id="test"  href="{{ url('/evenement') }}">Evénement</a>
  	                        </li>
                            <li class="nav-item">
  	                          <a class="nav-link"  href="{{ url('/photo') }}">Galerie Photo</a>
  	                        </li>
                          <li class="nav-item">
                          <a class="nav-link" style="Color:#D35352;"  href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Se déconnecter') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                          </li>

  	                    @else
                            <li class="nav-item">
  	                          <a class="nav-link"  href="{{ url('/login') }}">Espace adhérent</a>
  	                        </li>
                            <li class="nav-item">
  	                          <a class="nav-link"  href="{{ url('/evenement') }}">Evénement</a>
  	                        </li>
                            <li class="nav-item">
  	                          <a class="nav-link"  href="{{ url('/photo') }}">Galerie Photo</a>
  	                        </li>
  	                        @if (Route::has('register'))
  	                          <li class="nav-item">
  	                            <a class="nav-link" href="{{ route('register') }}">S'inscrire</a>
  	                          </li>
  	                        @endif
  	                    @endauth
                @endif
           
  	        </ul>
  	      </div>
  	    </div>
  	  </nav>
		@yield('content')
		 <!-- Footer -->
		 <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <span class="copyright">Copyright &copy; Rally Legend Réunion 2019</span>
          </div>
          <div class="col-md-4">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="https://www.facebook.com/RallyLegend/?epa=SEARCH_BOX" target=_blank>
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://rally-legend.skyrock.com/archives/#content_positioning" target=_blank>
               <i class="fab fa-speakap"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="list-inline quicklinks">
              <li class="list-inline-item">
                <a href="#">Politique de confidentialité</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Conditions d'utilisation</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"     integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"     crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"    crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.js"></script>

    <!-- Contact form JavaScript -->
    <script src="{{ asset('js/jqBootstrapValidation.js') }}"></script>
    <script src="{{ asset('js/contact_me.js') }}"></script>
    <script src="{{ asset('js/galerie.js') }}"></script>

    <!-- Custom scripts for this template -->
		<script src="{{ asset('js/agency.js') }}"></script>
    </div>
		@yield('js')
	</body>
</html>
