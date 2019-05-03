@extends('layouts.app')

@section('content')

<body id="page-top">
	<section class="bg-light" id="portfolio">
    	<div class="container">
      		<div class="row">
        		<div class="col-lg-12 text-center">
          			<h2 class="section-heading text-uppercase">Galerie</h2>
          			<h3 class="section-subheading text-muted">Les photos et présentation de nos plus beaux véhicules.</h3>
       			 </div>
	 		 </div>
		</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<!------ Include the above in your HEAD tag ---------->
<link href="./galerie.css" rel="stylesheet" id="bootstrap-css">

 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

<script type="text/javascript">
  $(document).ready(function(){
    $(".fancybox").fancybox({
          openEffect: "none",
          closeEffect: "none"
      });

      $(".zoom").hover(function(){

  		$(this).addClass('transition');
  	}, function(){

  		$(this).removeClass('transition');
  	});
  });


</script>

    <!-- Page Content -->
   <div class="container page-top">



        <div class="row">


            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="https://images.pexels.com/photos/62307/air-bubbles-diving-underwater-blow-62307.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" class="fancybox" rel="ligthbox">
                    <img  src="https://images.pexels.com/photos/62307/air-bubbles-diving-underwater-blow-62307.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" class="zoom img-fluid "  alt="">
                </a>
            </div>


       </div>
		</div>

    <br>
    <div class="col-sm-offset-4 col-sm-4">
    	@if(session()->has('ok'))
			<div class="alert alert-success alert-dismissible">{!! session('ok') !!}</div>
		@endif

			<table class="table">

				<tbody>
					@foreach ($photo as $photo)
						<tr>
							<td>{!! $photo->id !!}</td>
							<td class="text-primary"><strong>{!! $photo->name !!}</strong></td>
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
@endsection
