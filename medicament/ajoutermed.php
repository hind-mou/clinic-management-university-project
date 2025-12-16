<?php 
session_start();
include '../connexion.php';
$nom=$_POST['titre'];
$id=$_POST['id'];
if ($_SESSION["modifier"]==0){
$sql="INSERT INTO medicament (libelle) VALUES ('$nom'); ";
}else {
	$sql="UPDATE  medicament SET libelle='$nom' WHERE id_m='$id'; ";
$_SESSION["modifier"]=0;
}
	

mysqli_query($conn,$sql);
header("location:../medicament.php");
?>