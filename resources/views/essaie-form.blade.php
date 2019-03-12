<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Postez quelques choses</title>
	<meta charset="utf-8">
	 <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 30px;
               
            }
            .descriptif
            {
            	border: 1px solid grey;
            	border-radius: 7px 7px 7px 
            }

            .border-form
            {
            	border: 1px solid grey;
            	border-radius: 7px 7px 7px;
            	padding: 10px;
            }

            .PostIt
            {
            	display:block;
				width:150px;
				line-height:50px;
				text-align:center;
				vertical-align:middle;
				background:url(images/bouton-noir.png) no-repeat;
				color:grey;
				text-decoration:none;
				border-radius : 6px grey solid;
            }
            .PostIt
            {
            	background:url(images/bouton-noir-2.png) no-repeat;
            }
            .glob-form
            {
            	border: 2px solid;
                border-radius: 7px 7px 7px ;
                margin: auto;
                padding: 10px;
                margin:0px;
                width:auto;
            }

        </style>
        <!-- FIN DU STYLE -->
</head>


<body>
	@extends('template')
	<div class="glob-form" id="global-form">
		<h1>Ecrivez un post !</h1>
@section('contenu')

	<form method="post" class="form-post">
	 {{ csrf_field() }}

		<input class="border-form" type="text" name="Titre" placeholder="Titre du post"><br><br>
		<input class="border-form" type="text" name="Synopsis" placeholder="Synopsis"><br><br>
		<textarea class="descriptif" name="Descriptif" rows=4 cols=40 placeholder="Veuillez insérer le descriptif complet"></textarea><br> <br>
		<input  type="file" name="Photo" placeholder="Ajoutez vos photos">
		<br> <br> <br>
		<input class="PostIt" type="submit" value="Postez !">
	</form>
</div>
@endsection

</body>
</html>
