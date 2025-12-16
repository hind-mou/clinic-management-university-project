<?php 
session_start();
include '../connexion.php';
$patient=$_POST['patient'];
$medecin=$_POST['medecin'];
$date=$_POST['date'];
$time=$_POST['time'];

if ($_SESSION["modifier"]==0){
	
$sql="INSERT INTO rendez_vous (id_pat,id_u,date_r,time) VALUES ('$patient','$medecin','$date','$time'); ";
}else {
	$sql="UPDATE  rendez_vous SET id_u='$medecin',date_r='$date',time='$time' WHERE id_r='$patient'; ";
$_SESSION["modifier"]=0;
}

mysqli_query($conn,$sql);
header("location:../rendez.php");









 ?>