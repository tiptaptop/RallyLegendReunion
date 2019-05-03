@extends('layouts.app')

@section('content')


@foreach($evenement as $event)

<!-- Servante -->
@php
          $date = $event->date;
          $intl_date_formatter = new IntlDateFormatter('fr_FR',
                                      IntlDateFormatter::MEDIUM,
                                      IntlDateFormatter::NONE);
          $day_explode = explode(' ',  $intl_date_formatter->format(strtotime($date)));
          //var_dump($day_explode);         
@endphp

<!--Titre de la page + Sloggan-->

<section class="bg-light" id="events">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
            <h2 class="section-heading text-uppercase">{{$event->titre}}</h2>
                <h3 class="section-subheading text-muted">Tenez vous informer des prochains événements</h3>
            </div>
        </div>
    <div class="row">
        <div class="col-md-6">
            <ul class="event-list">
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
                        <li style="width:50%;"><a href="https://rally-legend.skyrock.com"><span class="fa fa-globe"></span>Skyrock</a></li>
                        <li style="width:50%;"><span class="fa fa-money"></span>Facebook</li>
                      </ul>
                    </div>
                    <div class="social">
                      <ul>
                        <li class="facebook" style="width:33%;"><a href="#facebook"><span class="fab fa-facebook"></span></a></li>
                        <li class="twitter" style="width:34%;"><a href="#twitter"><span class="fab fa-twitter"></span></a></li>
                        <li class="google-plus" style="width:33%;"><a href="#google-plus"><span class="fab fa-google-plus"></span></a></li>
                      </ul>
                    </div>
                  </li>
            </ul>
        </div>
    <div class="col-md-6">
      <img src={{asset('img/18.jpg')}} class='img-fluid'>

    </div>
</section>
@endforeach
@endsection