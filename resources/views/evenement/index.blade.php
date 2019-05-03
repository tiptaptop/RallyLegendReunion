@extends('layouts.app')

@section('content')
@php
 // var_dump($evenement);
    $k = 0;
@endphp
<!--Titre de la page + Sloggan-->
<section class="bg-light" id="events">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="section-heading text-uppercase">Calendrier</h2>
                <h3 class="section-subheading text-muted">Tenez vous informer des prochains événements</h3>
            </div>
        </div>
    <div class="row">
        <div class="col-md-6">
            <ul class="event-list">
    @foreach($evenement as $event)
    @php                 
      $k++;
      //Date de l'event 
          //Test en lecture de chaîne de caractère.
          //  $test = explode(' ', $date);
          //    var_dump( date('F', strtotime($date) ) );
          $date = $event->date;
          $intl_date_formatter = new IntlDateFormatter('fr_FR',
                                      IntlDateFormatter::MEDIUM,
                                      IntlDateFormatter::NONE);
          $day_explode = explode(' ',  $intl_date_formatter->format(strtotime($date)));
          //var_dump($day_explode);         
    @endphp
        <li>
          <time datetime="2014-07-20 0000">
          <span class="day">{{$day_explode[0]}}</span>
          <span class="month">{{$day_explode[1]}}</span>
          <span class="year">{{$day_explode[2]}}</span>
          <!--<span class="time">12:00 AM</span>-->
          </time>
          <div class="info">
          <h2 class="title">{{$event->titre}}</h2>
            <p class="desc">{{$event->lieu}}</p>
            <p class="desc">{{$event->descriptif}}</p>
            <ul>
              <li style="width:50%;"><a href="#website"><span class="fa fa-globe"></span> Website</a></li>
              <li style="width:50%;"><span class="fa fa-money"></span> $39.99</li>
            </ul>
          </div>
          <div class="social">
            <ul>
              <li class="facebook" style="width:33%;"><a href="#facebook"><span class="fa fa-facebook"></span></a></li>
              <li class="twitter" style="width:34%;"><a href="#twitter"><span class="fa fa-twitter"></span></a></li>
              <li class="google-plus" style="width:33%;"><a href="#google-plus"><span class="fa fa-google-plus"></span></a></li>
            </ul>
          </div>
        </li>


   <!--     <div class="col-md-4 mt-5">
          <div class="col-md-3" style="background-color:#D35352; font-size:16px;">                
            <p>8</p> 
            <p>Août 2019</p>
            <p>08:00</p>
          </div>
          <div class="col-md-9">
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
      @endif -->
      @endforeach
        </ul>
      </div>
      <div class="col-md-6">
          <img src='img/18.jpg' class='img-fluid'>

      </div>
</section>
@endsection