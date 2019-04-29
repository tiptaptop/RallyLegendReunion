@extends('layouts.template')

@section('contenu')
<body id="page-top">

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
            <h5>{{$event->titre}}</h5>
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