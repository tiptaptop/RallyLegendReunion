@extends('template')

@section('contenu')
    <br>
    <div class="col-sm-offset-4 col-sm-4">
    	@if(session()->has('ok'))
			<div class="alert alert-success alert-dismissible">{!! session('ok') !!}</div>
		@endif
		<section class="bg-light" id="portfolio">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Galerie</h2>
          <h3 class="section-subheading text-muted">Les photos et présentation de nos plus beaux véhicules.</h3>
        </div>
	  </div>
	</div>
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