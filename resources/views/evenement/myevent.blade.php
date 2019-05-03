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
   
        </ul>
      </div>
      <div class="col-md-6">
          <img src='img/18.jpg' class='img-fluid'>

      </div>
</section>
@endsection