<?php 
session_start();
$_SESSION["modifier"]=0;
include '../connexion.php';

echo "	<div class='contenu'>
					<hr>
					<button id='fermer'></button>
					<h2  id='phrase'style='font-family: Poppins-Bold;    color: #8a8a8a;margin-left: 130px;''>ajouter  rendez_vous</h2>
					<form action='rendez/ajouterrendez.php' method='POST' class='ajouterf'>
<div class='origin'>
						 <select name='patient' required='true' id='select' style='margin-left: 50px;'>
				       	<option value='' >Choisi patient (cin)...</option>";
 
//les patirnts :
 $sql="SELECT * FROM patient;";


$resultat=mysqli_query($conn,$sql);
							//obtenir le nom et le prenom 
while($r=mysqli_fetch_assoc($resultat)){

echo"<option value='".$r["id_pat"]."'>".$r["nom"]."-".$r["prenom"]." (".$r["cin"].")</option> 
         ";}
 echo"</select><br>";
//afficher les medecins
 echo"<select name='medecin' required='true' style='   margin-left: 50px;
	    margin-top: 15px;'> <option value='' >Choisi medecin</option>";

 $sql="SELECT * FROM user WHERE id_u !=21;";


$resultat=mysqli_query($conn,$sql);
							//obtenir le nom et le prenom 
while($r=mysqli_fetch_assoc($resultat)){

echo"<option value='".$r["id_u"]."'>".$r["nom"]."-".$r["prenom"]." </option> 
         ";}
 echo"</select><br>";


echo"
<input type='date' name='date'style='margin-left: 30px;
    margin-top: 15px;'>
<input type='time' name='time' style='margin-left: 200px;
'>
				        

<input type='submit' name='ok'>
</div>
					</form>
					
				</div>";





















 ?>