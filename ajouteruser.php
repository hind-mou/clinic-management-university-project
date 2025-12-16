<?php 
session_start();
include 'connexion.php';
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$user=$_POST['user'];
$pass=$_POST['pass'];
$type=$_POST['type'];
$sql="INSERT INTO user (id_s,nom,prenom,username,password) VALUES ($type,'$nom','$prenom','$user','$pass'); ";
mysqli_query($conn,$sql);
header("location:admin.php");







 ?>