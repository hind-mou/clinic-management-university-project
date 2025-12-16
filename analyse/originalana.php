<?php 

session_start();
$_SESSION["modifier"]=0;
include '../connexion.php';

echo 		"<div class='contenu'>
					<hr>
					<button id='fermer'></button>
					<h2  id='phrase'style='font-family: Poppins-Bold;    color: #8a8a8a;margin-left: 130px;'>ajouter  analyse</h2>
					<form action='analyse/ajoutera.php' method='POST' class='ajouterf'>

						
				       

				       <select name='patient' required='true' id='select' style='margin-left: 50px;'>
				       	<option value='' >Choisi patient (cin)...</option>";
 
//les patients :
 $sql="SELECT * FROM patient;";


$resultat=mysqli_query($conn,$sql);
							//obtenir le nom et le prenom 
while($r=mysqli_fetch_assoc($resultat)){

echo"<option value='".$r["id_pat"]."'>".$r["nom"]."-".$r["prenom"]." (".$r["cin"].")</option> 
         ";}
 echo"</select><br>";
 echo"<select name='analyse' required='true' style='margin-left:50px;'> <option value='' >Choisi type (prix)...</option>";

$sql="SELECT * FROM analyse;";


$resultat=mysqli_query($conn,$sql);
							
while($r=mysqli_fetch_assoc($resultat)){

echo"<option value='".$r["id_a"]."'>".$r["libelle"]."(".$r["prix"]." DH)</option> 
         ";}
 echo"</select><br>";

echo "	        

<input type='submit' name='ok'>
					</form>
					
				</div>";


 ?>