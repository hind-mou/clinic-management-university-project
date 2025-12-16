<?php 
include_once 'connexion.php';
session_start();


$user=$_POST['user'];
$_SESSION["user"]=$user;
$pass=$_POST['pass'];
$sql="SELECT * FROM user where username='$user' and password='$pass';";
if ($resultat=mysqli_query($conn,$sql))
{
	$v=mysqli_num_rows($resultat);
	if($v==1){
		while($row=mysqli_fetch_assoc($resultat)){
			//verifier si l'utilisateur est une assistance 
			$_SESSION["id_u"]=$row['id_u'];
			if($row['id_s']==2){
				$_SESSION["user"]=2;
			}else{
				$_SESSION["user"]=1;
			}
		}
		header("location:index.php");
	}else{
		
		header("location:login.php?msg=failed");
	}
	}