<!DOCTYPE html>
<html lang="fr">
    <head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<title>Rally Legend Reunion</title>
		<link href="vendor/css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			{{ Html::style('https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js') }}
			{{ Html::style('https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js') }}
		<![endif]-->
		@yield('css')
		<link href="css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/agency.css" rel="stylesheet">
		<style> textarea { resize: none; } </style>
	</head>
	<body id="page-top">
	<!-- Navigation -->
		<nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar-shrink" id="mainNav">
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
  	                        <a class="nav-link" style="Color: #D35352;" href="{{ url('/forums') }}">Espace adhérent</a>
  	                      </li>
													<li class="nav-item">
                          <a class="nav-link" href="{{ route('logout') }}"
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
  	                        <a class="nav-link" style="Color: #D35352;" href="{{ route('login') }}">Se connecter</a>
  	                      </li>
  	                        @if (Route::has('register'))
  	                          <li class="nav-item">
  	                            <a class="nav-link" style="Color: #D35352;" href="{{ route('register') }}">S'inscrire</a>
  	                          </li>
  	                        @endif
  	                    @endauth
  	            @endif
  	        </ul>
  	      </div>
  	    </div>
  	  </nav>
		@yield('contenu')
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

    <!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
		<script src="js/agency.js"></script> 
		@yield('js')
	</body>
</html>