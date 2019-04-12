@extends('template')

@section('contenu')
<body id="page-top">

<!--Nav-->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar-shrink" id="mainNav">
  <div class="container">
    <a class="navbar-brand js-scroll-trigger" href="#page-top" id="index">Rally Legend</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      Menu
      <i class="fa fa-bars"></i>
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
@php
    $k = 0;
@endphp
<!--Titre de la page + Sloggan-->
<section class="bg-light" id="events">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase">Calendrier</h2>
                <h3 class="section-subheading text-muted">Tenez vous informer des prochains événements</h3>
            </div>
        </div>
    </div>  
    <div class="row">
    @foreach($evenement as $event)
    @php
      $k++;
    @endphp
    
        <div class="col-md-4 mt-5">
          <div class="col-xs-3" style="background-color:#D35352; font-size:16px;">                
            <p>8</p> 
            <p>Août 2019</p>
            <p>08:00</p>
          </div>
          <div class="col-xs-9">
            <div class="box">
              <h5 class="section-heading text-uppercase mt-0">{{$event->date}}</h5>
                  <small class="section-heading text-uppercase">{{$event->descriptif}}</small>
                  <p class="section-heading text-uppercase">08:00 - Emplacement du marché forrain de Saint-Paul</p>
                  <p class="section-heading text-uppercase" style="font-color:#D35352;">30 Nombres de personnes invités</p>
                  <small class="section-heading text-uppercase">27 personnes confirmées</small>
            </div>
        </div>
      </div>
      @if($k == 3)
        @php $k = 0; @endphp
        </div><div class="row">
      @endif
      @endforeach

</section>
@endsection