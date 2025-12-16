<?php 

include '../connexion.php';
session_start();
$cin=$_POST['cin'];
$sql="SELECT consultation.id_c,rendez_vous.date_r,patient.cin FROM consultation,rendez_vous,patient WHERE patient.id_pat='$cin' AND rendez_vous.id_pat=patient.id_pat AND consultation.id_r=rendez_vous.id_r ORDER BY date_r desc LIMIT 1;";

$resultat=mysqli_query($conn,$sql);
if(mysqli_num_rows($resultat)>0){
		while($row=mysqli_fetch_assoc($resultat)){
			
			echo $row['date_r'];
			

		}}else {
			
			echo"pas de consultation";
		
		}



 ?>