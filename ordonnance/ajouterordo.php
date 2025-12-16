<?php 

session_start();
include '../connexion.php';
$p=$_POST['patient'];


$med1=$_POST['med1'];
$med2=$_POST['med2'];
$med3=$_POST['med3'];
$med4=$_POST['med4'];
$med5=$_POST['med5'];
$med6=$_POST['med6'];


$pos1=$_POST['pos1'];
$pos2=$_POST['pos2'];
$pos3=$_POST['pos3'];
$pos4=$_POST['pos4'];
$pos5=$_POST['pos5'];
$pos6=$_POST['pos6'];

if($_SESSION["modifier"]==0){
	$date=$_POST['consultation'];

//chercher id de consultation
$sql="SELECT consultation.id_c FROM consultation,rendez_vous WHERE rendez_vous.id_r=consultation.id_r AND rendez_vous.id_pat='$p' AND rendez_vous.date_r='$date';";
$resultat=mysqli_query($conn,$sql);
while($r=mysqli_fetch_assoc($resultat)){
	$id_c=$r['id_c'];
}
}



//creer une orodonnance 
if($_SESSION["modifier"]==0){

$sql="INSERT INTO ordonnance (id_c) VALUES ('$id_c');";
mysqli_query($conn,$sql);

//avoir id de lordonnance 
$sql="SELECT id_o FROM ordonnance WHERE id_c='$id_c';";
 $resultat=mysqli_query($conn,$sql);
while($r=mysqli_fetch_assoc($resultat)){
	$id_o=$r['id_o'];
}
}



 //ajouter les medicaments 

$med = array($med1,$med2,$med3,$med4,$med5,$med6);
$pos= array($pos1,$pos2,$pos3,$pos4,$pos5,$pos6);

//obtenir id de medicament




for ($i=0; $i <6; $i++) { 
	if(!empty($med[$i])){
		if($_SESSION["modifier"]==0){

		$sql="INSERT INTO ord_med VALUES ('$id_o','$med[$i]','$pos[$i]');";
	}else{
		
		$id_o=$_POST['id_o'];
		
		$f="DELETE FROM ord_med WHERE id_o='$id_o';";
		mysqli_query($conn,$f);
echo $id_o;
$sql="INSERT INTO ord_med VALUES ('$id_o','".$med[$i]."','".$pos[$i]."');";
echo "INSERT INTO ord_med VALUES ('$id_o','".$med[$i]."','".$pos[$i]."');";
$_SESSION["modifier"]=0;
		
	}
		mysqli_query($conn,$sql);
	}
	}


header("location:../ordonnance.php");







 ?>