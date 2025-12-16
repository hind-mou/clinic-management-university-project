<?php 

session_start();
include '../connexion.php';
$p=$_POST['patient'];
$a=$_POST['analyse'];
if ($_SESSION["modifier"]==0){
	
	

$sql="INSERT INTO patient_analyse (id_ana,id_pat) VALUES ('$a','$p'); ";

	}else {
		$d=$_POST['d'];
$sql="UPDATE patient_analyse set id_ana='$a' WHERE id_pat='$p' AND CAST(date_a AS DATE)='$d'; ";
$_SESSION["modifier"]=0;


	}

mysqli_query($conn,$sql);
header("location:../analyse.php");






 ?>