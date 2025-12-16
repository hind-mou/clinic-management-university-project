<?php 
session_start();
include '../connexion.php';
$id=$_POST['id'];
$montant=$_POST['montant'];
$id= substr($id,15);
echo $id;
$sql="INSERT INTO paiement (id_c,montant) VALUES ('$id','$montant'); ";

	

mysqli_query($conn,$sql);
header("location:../paiement.php");
?>