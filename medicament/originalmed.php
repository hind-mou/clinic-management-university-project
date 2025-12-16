<?php 

session_start();
$_SESSION["modifier"]=0;
include '../connexion.php';
echo 	"<div class='contenu'>
					<hr>
					<button id='fermer'></button>
					<h2  id='phrase'style='font-family: Poppins-Bold;    color: #8a8a8a;margin-left: 130px;'>ajouter  medicament</h2>
					<form action='medicament/ajoutermed.php' method='POST' class='ajouterf'>

						<input type='text' name='titre' placeholder='titre' required='true' id='cin'>
				        
<br>
				        

<input type='submit' name='ok'>
					</form>
					
				</div>";










 ?>