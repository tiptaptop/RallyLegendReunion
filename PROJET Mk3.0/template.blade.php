@extends('template')

@section('RALLY LEGEND')


@stop

@section('  <body id="page-top">

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar-shrink" id="mainNav">
  <div class="container">
    <a class="navbar-brand js-scroll-trigger" href="#page-top">Rally Legend</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      Menu
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav text-uppercase ml-auto">
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" style="Color: #D35352;" href="#portfolio">Galerie</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" style="Color: #D35352;" href="#about">évènement</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" style="Color: #D35352;" href="#contact">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Header -->
<header class="masthead">
  <div class="container">
    <div class="intro-text">
      <div class="intro-lead-in">Fan de voiture d'époque/collection?</div>
      <div class="intro-heading text-uppercase">passionné collectioneur photographe</div>
      <a class="btn btn-secondary btn-xl text-uppercase js-scroll-trigger" href="#services">Se site est fait pour vous.</a>
    </div>
  </div>
</header>

<!-- Portfolio Grid -->
<section class="bg-light" id="portfolio">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase">Galerie</h2>
        <h3 class="section-subheading text-muted">Quelques photos et présentation de nos plus belles voitures.</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 col-sm-6 portfolio-item">
        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
          <div class="portfolio-hover">
            <div class="portfolio-hover-content">
              <i class="fas fa-plus fa-3x"></i>
            </div>
          </div>
          <img class="img-fluid" src="img/3.jpg" alt="">
        </a>
        <div class="portfolio-caption">
          <h4>Renault R8</h4>
          <p class="text-muted">Djebarlen TAMBON</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 portfolio-item">
        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
          <div class="portfolio-hover">
            <div class="portfolio-hover-content">
              <i class="fas fa-plus fa-3x"></i>
            </div>
          </div>
          <img class="img-fluid" src="img/2.jpg" alt="">
        </a>
        <div class="portfolio-caption">
          <h4>Renault R5 turbo</h4>
          <p class="text-muted">Jordan CLAIRE-FONTAINE</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 portfolio-item">
        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
          <div class="portfolio-hover">
            <div class="portfolio-hover-content">
              <i class="fas fa-plus fa-3x"></i>
            </div>
          </div>
          <img class="img-fluid" src="img/5.jpg" alt="">
        </a>
        <div class="portfolio-caption">
          <h4>Opel Manta 400</h4>
          <p class="text-muted">Boris CHANGEL</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 portfolio-item">
        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
          <div class="portfolio-hover">
            <div class="portfolio-hover-content">
              <i class="fas fa-plus fa-3x"></i>
            </div>
          </div>
          <img class="img-fluid" src="img/7.jpg" alt="">
        </a>
        <div class="portfolio-caption">
          <h4>Porsche 944</h4>
          <p class="text-muted">David GRONDIN</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 portfolio-item">
        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
          <div class="portfolio-hover">
            <div class="portfolio-hover-content">
              <i class="fas fa-plus fa-3x"></i>
            </div>
          </div>
          <img class="img-fluid" src="img/4.jpg" alt="">
        </a>
        <div class="portfolio-caption">
          <h4>Peugeot 205 t16</h4>
          <p class="text-muted">Quenteau FRUTIN</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 portfolio-item">
        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
          <div class="portfolio-hover">
            <div class="portfolio-hover-content">
              <i class="fas fa-plus fa-3x"></i>
            </div>
          </div>
          <img class="img-fluid" src="img/6.jpg" alt="">
        </a>
        <div class="portfolio-caption">
          <h4>Honda NSX</h4>
          <p class="text-muted">Tanguy MOREAU</p>
        </div>
      </div>
    </div>
  </div>
</section>

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

<!-- Portfolio Modals -->

<!-- Modal 1 -->
<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
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
              <h2 class="text-uppercase">Renault R8</h2>
              <p class="item-intro text-muted">Djebarlen TAMBON</p>
              <img class="img-fluid d-block mx-auto" src="img/3.jpg" alt="">
              <p>Les Renault 8 et 10 sont les dernières voitures du constructeur Renault avec un moteur placé à l'arrière, jusqu'à la Renault Twingo III de 2014, si l'on excepte les Renault 5 Turbo, Renault Spider et Clio V6.La Renault 10 est une version allongée sur l'avant et sur l'arrière de la Renault 8. Les Renault 8 et 10 ont été produites en France à l'usine de Flins (Yvelines) et au Canada*. Lancée en juin 1962, la Renault 8 est dessinée par Gaston Juchet et Philippe Charbonneaux. C'est l'une des premières voitures françaises avec quatre freins à disques. Le « moteur Sierra » (connu également sous le nom de « moteur Cléon-Fonte ») à cinq paliers est nouveau. Ce moteur élaboré par l'ingénieur René Vuaillat connaîtra une longue carrière puisqu'il sera encore utilisé sur les Twingo, Express, Clio et Supercinq dans les années 1990.</p> 
              <ul class="list-inline">
                <li>Date: 15/11/2018</li>
                <li>Évènenement: Salon Motor Expo 2</li>
                <li>Catégorie: Exposition</li>
              </ul>
              <button class="btn btn-primary" data-dismiss="modal" type="button">
                <i class="fas fa-times"></i>
                Fermer fenêtre</button>
                <ul>
                  <br><li>*(Usine SOMA Société de Montage Automobile de Saint-Bruno de Montarville au Québec)</li>
                </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal 2 -->
<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
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
              <h2 class="text-uppercase">Renault R5 turbo</h2>
              <p class="item-intro text-muted">Jordan CLAIRE-FONTAINE</p>
              <img class="img-fluid d-block mx-auto" src="img/2.jpg" alt="">
              <p>La Renault 5 Turbo est une auto très atypique extrapolée d'une Renault 5. Elle possède un moteur en position centrale-arrière et développant 160 ch, d'une cylindrée de 1 397 cm3 suralimenté par turbocompresseur. Elle fait grande impression tant sur la route qu'en compétition notamment en FIA Groupe 4 puis Groupe B. Certains la considèrent comme le « premier custom de série ».En 1977, le projet 822 naît de l'imagination de Jean Terramorsi, sous-directeur à la Direction du produit, chargé des petites séries à l'usine Alpine de Dieppe et d'Henry Lherm, son jeune adjoint. Ce haut de gamme doit aider à vendre les Renault 5 de base et doit aussi répondre à un cahier des charges précis pour s'inscrire en compétition en FIA Groupe 3 et Groupe 4.</p>
              <ul class="list-inline">
                <li>Date: 15/11/2018</li>
                <li>Évènenement: Salon Motor Expo 2</li>
                <li>Catégorie: Exposition</li>
              </ul>
              <button class="btn btn-primary" data-dismiss="modal" type="button">
                <i class="fas fa-times"></i>
                Fermer fenêtre</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal 3 -->
<div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
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
              <h2 class="text-uppercase">Opel Manta 400</h2>
              <p class="item-intro text-muted">Boris CHANGEL</p>
              <img class="img-fluid d-block mx-auto" src="img/5.jpg" alt="">
              <p>L' Opel Manta est un véhicule à moteur coupé sportif fabriqué par Opel de 1970 à 1988.La Manta A est sortie en septembre 1970, deux mois avant la nouvelle Opel Ascona sur laquelle elle reposait. Concurrent de la Ford Capri , il s’agissait d’un coupé «trois portes» à deux portes et de feux arrières arrondis distinctifs, assez similaires à ceux de l’ Opel GT et qui ont été utilisés sur la GT en 1973, son modèle final. année. Il a pris son nom et quelques indices mineurs de style, dans le concept car de Manta Ray (1961), qui a également influencé la Chevrolet Corvette C3 de 1968.</p>
              <ul class="list-inline">
                <li>Date: 15/11/2018</li>
                <li>Évènenement: Salon Motor Expo 2</li>
                <li>Catégorie: Exposition</li>
              </ul>
              <button class="btn btn-primary" data-dismiss="modal" type="button"> 
                <i class="fas fa-times"></i>
                Fermer fenêtre</button>
                <ul>
                 <br><li>*(les deux Chevrolet et Opel ayant General Motors comme société mère) </li> 
                </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal 4 -->
<div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
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
              <h2 class="text-uppercase">Porsche 944</h2>
              <p class="item-intro text-muted">David GRONDIN</p>
              <img class="img-fluid d-block mx-auto" src="img/7.jpg" alt="">
              <p>La Porsche 944 est un modèle de voiture de sport produit par le constructeur Porsche. Au début des années 1980, les seuls modèles commercialisés par Porsche sont la célèbre 911, et les deux modèles à moteur avant 924 et 928. Les Porsche à moteur avant étaient prévues pour moderniser l'image vieillissante de la célèbre 911, et assurer un comportement routier plus équilibré, grâce à une meilleure répartition des masses.</p>
              <ul class="list-inline">
                <li>Date: 15/11/2018</li>
                <li>Évènenement: Salon Motor Expo 2</li>
                <li>Catégorie: Exposition</li>
              </ul>
              <button class="btn btn-primary" data-dismiss="modal" type="button">
                <i class="fas fa-times"></i>
                Fermer fenêtre</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal 5 -->
<div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
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
              <h2 class="text-uppercase">Peugeot 205 t16</h2>
              <p class="item-intro text-muted">Quenteau FRUTIN</p>
              <img class="img-fluid d-block mx-auto" src="img/4.jpg" alt="">
              <p>Avec sa version compétition, Peugeot remporte les titres mondiaux pilotes et constructeurs en championnat du monde des rallyes en 1985 et 1986, ainsi qu'en moins de trois saisons pleines au moins une fois toutes les épreuves proposées hormis les deux africaines et celle américaine. Elle a été voulue par le responsable de la compétition Peugeot de l'époque, Jean Todt, et s'inscrivait dans la catégorie Groupe B* du règlement des rallyes.</p>
              <ul class="list-inline">
                <li>Date: 15/11/2018</li>
                <li>Évènenement: Salon Motor Expo 2</li>
                <li>Catégorie: Exposition</li>
              </ul>
              <button class="btn btn-primary" data-dismiss="modal" type="button">
                <i class="fas fa-times"></i>
                Fermer fenêtre</button>
                <ul>
                  <br><li>*Cette catégorie marqua particulièrement le Championnat du monde des rallyes où les véhicules atteignaient des records de puissance pour la discipline, jusqu'à 600 chevaux, mais aussi pour ses accidents mortels, qui provoquèrent son bannissement en mai 1986.</li>
                </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal 6 -->
<div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
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
              <h2 class="text-uppercase">Honda NSX</h2>
              <p class="item-intro text-muted">Tanguy MOREAU</p>
              <img class="img-fluid d-block mx-auto" src="img/6.jpg" alt="">
              <p>La Honda NSX conçue par le constructeur automobile japonais Honda, est apparue en 1989 au salon de Chicago. Vendue sous la marque Honda dans le monde, elle est badgée Acura* aux États-Unis, au Canada et à Hong Kong. La seconde génération, dévoilée au Salon international de l'automobile de Genève 2015, est commercialisée en 2016. Le sigle NSX est l'abréviation de "New Sport eXperimental".</p>
              <ul class="list-inline">
                <li>Date: 15/11/2018</li>
                <li>Évènenement: Salon Motor Expo 2</li>
                <li>Catégorie: Exposition</li>
              </ul>
              <button class="btn btn-primary" data-dismiss="modal" type="button">
                <i class="fas fa-times"></i>
                Fermer fenêtre</button>
                <ul>
                  <br><li>*(Acura est la marque haut de gamme de la firme japonaise Honda créée en 1986, utilisée aux États-Unis)</li>
                </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Contact form JavaScript -->
<script src="js/jqBootstrapValidation.js"></script>
<script src="js/contact_me.js"></script>

<!-- Custom scripts for this template -->
<script src="js/agency.js"></script>

</body>

</html>')
    
@stop