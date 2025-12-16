<?php 
session_start();
include 'connexion.php';
$cin=$_POST['cin'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$date=$_POST['date'];
$tel=$_POST['tel'];
$email=$_POST['email'];
$adresse=$_POST['adresse'];
$nationalite=$_POST['nationalite'];
$gender=$_POST['gender'];
$maladies=$_POST['maladies'];

if($gender=="femme"){
	$gender=1;
}else{
		$gender=2;

}
switch($nationalite){
	case "maroc":
	$nationalite=1000;
	break;
	case "france":
	$nationalite=1001;
	break;
	case "algerie":
	$nationalite=1002;
	break;
	case "tunisie":
	$nationalite=1003;
	break;
}
if ($_SESSION["modifier"]==0){
$sql="INSERT INTO patient (cin,nom,prenom,id_n,date_naissance,tel,email,adresse,sexe,maladies_chroniques) VALUES ('$cin','$nom','$prenom','$nationalite','$date','$tel','$email','$adresse','$gender','$maladies'); ";}
else {
	$id=$_POST['id'];
	
$sql="UPDATE patient set nom='$nom',prenom='$prenom',id_n='$nationalite',date_naissance='$date',tel='$tel',email='$email',adresse='$adresse',sexe='$gender',maladies_chroniques='$maladies' WHERE id_pat='$id';";
   $_SESSION["modifier"]=0;
}
mysqli_query($conn,$sql);


		header("location:patient.php");













 ?>