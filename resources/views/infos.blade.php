@extends("template")

@section("contenu")
    {!! Form::open(["url" => "users"]) !!}
        {!! Form::label("nom", "entrer votre nom:") !!}
        {!! Form::text("nom") !!}
        {!! Form::submit("Envoyez !") !!}
    {!! Form::close() !!}
@endsection