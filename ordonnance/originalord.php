<?php 
session_start();
$_SESSION["modifier"]=0;
include '../connexion.php';
echo 	"	<div class='contenu'>
					<hr>
					<button id='fermer'></button>
					<h2 id='phrase'style='font-family: Poppins-Bold;    color: #8a8a8a;margin-left: 130px;'>ajouter  ordonnance</h2>
					<form action='ordonnance/ajouterordo.php' method='POST' class='ajouterf'>
						  <select name='patient' required='true' id='select' style='margin-left: 50px;'>
				       	<option value='' >Choisi patient (cin)...</option>";



//les patients :
 $sql="SELECT * FROM patient;";


$resultat=mysqli_query($conn,$sql);
							//obtenir le nom et le prenom 
while($r=mysqli_fetch_assoc($resultat)){

echo"<option  id='cin' value='".$r["id_pat"]."'>".$r["nom"]."-".$r["prenom"]." (".$r["cin"].")</option> 
         ";}
 echo"</select><br>";
 //il est inseré automatiquement a la derniere consultaion

 $sql="SELECT * FROM medicament;";
  $resultat=mysqli_query($conn,$sql);


				     echo"   <button id='chercher'></button>
				       <select name='consultation' required='true' id='consultations'>
 <option value='' disabled selected>consultation</option>
 
</select><br>
<table style='margin-left: 30px;'>
	<th style='color: #0cb0ff;'>medicament</th>
	<th style='color: #0cb0ff;'>posologie</th>
	<tr>
		<td><select style='margin-bottom:10px;' name='med1'><option value='' >Choisi...</option>";
		 while($r=mysqli_fetch_assoc($resultat)){
			echo " <option value='".$r['id_m']."' >". $r['libelle']."</option>";}
			echo "</select></td>
<td><input type='text' name='pos1'></td>
	</tr>
	<tr>

		<td><select style='margin-bottom:10px;'  name='med2'><option value='' >Choisi...</option>";
		  $resultat=mysqli_query($conn,$sql); while($r=mysqli_fetch_assoc($resultat)){ 
		 echo " <option value='".$r['id_m']."' >". $r['libelle']."</option>";}
		 echo "</select></td>
<td><input type='text' name='pos2'></td>
	</tr>
	<tr>
		<td><select style='margin-bottom:10px;'  name='med3'><option value='' >Choisi...</option>";
		  $resultat=mysqli_query($conn,$sql); while($r=mysqli_fetch_assoc($resultat)){ 
			echo " <option value='".$r['id_m']."' >". $r['libelle']."</option>";}
			echo "</select></td>
<td><input type='text' name='pos3'></td>
	</tr>
	<tr>
		<td><select style='margin-bottom:10px;'  name='med4'><option value='' >Choisi...</option>";
		  $resultat=mysqli_query($conn,$sql); $resultat=mysqli_query($conn,$sql); while($r=mysqli_fetch_assoc($resultat)){ 
		 echo " <option value='".$r['id_m']."' >". $r['libelle']."</option>";}
		 echo "</select></td>
<td><input type='text' name='pos4'></td>
	</tr>
	<tr>
		<td><select style='margin-bottom:10px;'  name='med5'><option value='' >Choisi...</option>";
		  $resultat=mysqli_query($conn,$sql); while($r=mysqli_fetch_assoc($resultat)){ 
		 echo " <option value='".$r['id_m']."' >". $r['libelle']."</option>";}
		 echo "</select></td>
<td><input type='text' name='pos5'></td>
	</tr>
	<tr>
		<td><select style='margin-bottom:10px;'  name='med6'><option value='' >Choisi...</option>";
		  $resultat=mysqli_query($conn,$sql); while($r=mysqli_fetch_assoc($resultat)){ 
		 echo " <option value='".$r['id_m']."' >". $r['libelle']."</option>";}
		 echo "</select></td>
<td><input type='text' name='pos6'></td>
	</tr>








</table>
				        

<input type='submit' name='ok'>
					</form>
					
				</div> ";
























 ?>