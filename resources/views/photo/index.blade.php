@extends('template')

@section('contenu')

<body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar-shrink" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top" id="index">Rally Legend</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" style="Color: #D35352;" href="index2.html">Accueil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" style="Color: #D35352;" href="focus.html">Essaie/focus</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" style="Color: #D35352;" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

	<section class="bg-light" id="portfolio">
    	<div class="container">
      		<div class="row">
        		<div class="col-lg-12 text-center">
          			<h2 class="section-heading text-uppercase">Galerie</h2>
          			<h3 class="section-subheading text-muted">Les photos et présentation de nos plus beaux véhicules.</h3>
       			 </div>
	 		 </div>
		</div>
		<div class="row">
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="" alt="">
          </a>
          <div class="portfolio-caption">
            <h4></h4>
            <p class="text-muted"></p>
          </div>
        </div>
        

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
              <a href="cgu.pdf">Conditions générales d'utilisation</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  
  <!-- Modal -->
  <div class="portfolio-modal modal fade" id="portfolioModal12" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase"></h2>
                <p class="item-intro text-muted"></p>
                <img class="img-fluid d-block mx-auto" src="" alt="">
                <p></p>
                <ul class="list-inline">
                  <li>Date: </li>
                  <li>Évènenement: </li>
                  <li>Catégorie: </li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Fermer la fenêtre</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

    <br>
    <div class="col-sm-offset-4 col-sm-4">
    	@if(session()->has('ok'))
			<div class="alert alert-success alert-dismissible">{!! session('ok') !!}</div>
		@endif
		
			<table class="table">
				<thead>
					<tr>
						<th>#</th>
						<th>Nom</th>
						<th></th>
						<th></th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					@foreach ($photo as $photo)
						<tr>
							<td>{!! $photo->id !!}</td>
							<td class="text-primary"><strong>{!! $photo->name !!}</strong></td>
							<td>{!! link_to_route('photo.show', 'Voir', [$photo->id], ['class' => 'btn btn-success btn-block']) !!}</td>
							<td>{!! link_to_route('photo.edit', 'Modifier', [$photo->id], ['class' => 'btn btn-warning btn-block']) !!}</td>
							<td>
								{!! Form::open(['method' => 'DELETE', 'route' => ['photo.destroy', $photo->id]]) !!}
									{!! Form::submit('Supprimer', ['class' => 'btn btn-danger btn-block', 'onclick' => 'return confirm(\'Vraiment supprimer cet utilisateur ?\')']) !!}
								{!! Form::close() !!}
							</td>
						</tr>
					@endforeach
	  			</tbody>
			</table>
		</div>
		{!! link_to_route('photo.create', 'Télécharger une photo', [], ['class' => 'btn btn-info pull-right']) !!}
		{!! $links !!}
	</div>
@endsection