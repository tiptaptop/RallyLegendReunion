<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Inscrivez-vous ! - Rally Legend Réunion</title>
	<meta charset="utf-8">


</head>	
<!-- STYLES --> 
		<style type="text/css">
			html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 15px;
            }

              .border-form
            {
            	border: 1px solid grey;
            	border-radius: 7px 7px 7px;
            	padding: 10px;
            }
		</style>
	<!-- FIN DE LA STYLISATION DES CLASSES -->

<body>
@extends('template')
	<div class="SignIn" id="Sign-Form">
		<div class="title">
			<h1>Inscrivez-vous pour pouvoir avoir plus de privilèges</h1>
		</div>
@section('contenu')
	<div class="SignIn-Form">
		<form method="post">
			<input type="text" name="Nom" placeholder="Nom" rows=4 cols=40 class="border-form"><br><br>


			<input type="text" name="Prénom" placeholder="Prénom" class="border-form"><br><br>


			<input type="text" name="Email" placeholder="Email" class="border-form"><br><br>
			

			<input type="text" name="Pseudo" placeholder="Pseudo" class="border-form"><br><br>
			

			<input type="Password" name="Password" placeholder="Entrez votre Mot de passe" class="border-form"><br><br>
			

			<input type="file" value="Ajoutez une photo de votre voiture" placeholder="Veuillez choisir des photos de votre véhicule"><br><br>
			

			<input type="checkbox" name="according to">
			<label for="according to the GCU">En cochant cette case je certifie avoir pris connaissance <a href="gcu" target="_blank">des règles</a> du site.</label></p><br><br>
			
			<input type="submit" name="M'inscrire">   <a class="button" id="button-redirect"></a>
		</form>
	</div>
</body>
</html>