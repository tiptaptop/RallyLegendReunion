@extends('layouts.app')

@section('content')
    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
          <div class="intro-lead-in">Fan de voiture d'époque/collection?</div>
          <div class="intro-heading text-uppercase">passionné collectioneur photographe</div>
          <a class="btn btn-dark btn-xl text-uppercase js-scroll-trigger" href="{{ url('/forums') }}">Ce site est fait pour vous</a>
        </div>
      </div>
    </header>

    <!-- About -->
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">évènement</h2>
            <h3 class="section-subheading text-muted">Nos rassemblements à venir.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <ul class="timeline">
              <li>
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>30 septembre 2018</h4>
                    <h4 class="subheading">1ere montée historique de Matouta</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">C’est fait, le Club de Jean François GRONDIN nous dévoile une nouveauté pour 2018 !
          Il y a une dizaine de jours environ, le Club Rallye Legend annonçait sur son blog un nouvel évènement inédit, avec comme teaser un simple visuel indiquant « nouveauté » Rallye Legend Réunion…
          Le voile est ainsi levé en ce lundi soir tardivement, et indique ainsi que cette nouveauté concerne un nouvel itinéraire, une nouvelle ville qui accueillera une montée historique.
          Un 2ème site de montée de démonstration dite historique qui devait se faire mais où ? Après réflexion et divers contacts établis, c’est la mairie de Saint Joseph qui était la plus intéressée avec un élu aux sports passionné de sports mécaniques et donc de rallye, comment pouvait il en être autrement. Et C’est parti pour de nouvelles aventures avec un rendez-vous pris à Saint Jo le 30 septembre  2018.
          C’est donc le dimanche 30 septembre que se tiendra la toute première Montée Historique dans le Sud, avec comme itinéraire MATOUTA !</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>21 septembre 2018</h4>
                    <h4 class="subheading">Expo youngtimers sportives, collectors et series limitées</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Afin de preparer un futur rassemblement qui se greffera sur une expo de vehicules anciens lors de la journée du patrimoine,  le 21 septembre 2018 sur la commune de l'entre deux, je vous demande pour ceux dont je n'ai pas les coordonnées et qui seraient intéréssés de me les envoyer via notre formulaire de contact : <br><br>

            - Nom/Prenom<br>
            - Numéro de téléphone<br>
            - Email<br><br>

          VEHICULES ACCEPTES<br>
          modele de vehicule : véhicules Youngtimer  sportives  fabriquées entre 1974 et 1994. On fera un tri parmi les vehicules qui nous seront proposés.<br><br>  
                    Véhicules plus anciens acceptés si sportives ou passé sportif reconnu.<br><br>
                    Vehicules collector ou serie limitée meme si elles sont recentes.<br><br> 

          PAS DE DIESEL. PAS DE TUNING.<br><br>

          Les vehicules ne rentrant pas dans cette categorie ne seront pas pris en compte. </p>
                  </div>
                </div>
              </li>
              <li>
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>18 septembre 2018</h4>
                    <h4 class="subheading">Journée du Patrimoine</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Exposition de véhicules anciens à l'entre deux dans le cadre des journées du patrimoine organisé par l'OMAG de l'entre deux et les differents clubs autos existants.</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>9 décembre 2018</h4>
                    <h4 class="subheading">3ème montée Panon Historic</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Comment scinder un évènement en deux c'est à dire la 3ème montée Panon Historic et une exposition animation délicate à mettre en place pendant une démonstration automobile car les gens viennent essentiellement pour la "course".
					Le site : plateau sportif de trois bassins à proximité de la place des festivités. C'est organiser un évènement distinct mais lié à un autre principal Une présentation et exposition de voitures des participants à la 3ème Montée Panon Historic qui aura lieu en décembre 2018.
					La présence je l'espère d'autres associations de Trois Bassins avec valorisation de produits locaux et artisanaux
					Même ceux qui ne vont pas rouler mais juste exposer a montée Panon pourront bien sur venir à cette journée.</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <h4>Vous aussi
                    <br>participer
                    <br>à nos event!</h4>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact -->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">contacter nous</h2>
            <h3 class="section-subheading text-muted">Pour plus d'information sur nos événement et/ou nos rassemblement.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <form id="contactForm" name="sentMessage" novalidate="novalidate">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" id="name" type="text" placeholder="Votre nom/prenom*" required="required" data-validation-required-message="Veuillez entrer votre nom/prenom.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="email" type="email" placeholder="Votre email*" required="required" data-validation-required-message="Veuillez entrer votre adresse mail.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="phone" type="tel" placeholder="Votre numéro de téléphone*" required="required" data-validation-required-message="Veuillez entrer votre numéro de téléphone.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <textarea class="form-control" id="message" placeholder="Votre message*" required="required" data-validation-required-message="Saisissez votre message."></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Envoyer un message</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

@endsection

