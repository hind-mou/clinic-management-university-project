<?php 
include '../connexion.php';
session_start();
$id=$_POST['id'];
$p=substr($id,0,3);
$d=substr($id,4);
$_SESSION["modifier"]=1;

$sql="SELECT *FROM patient WHERE id_pat='$p';";
$resultat=mysqli_query($conn,$sql);

	while($row=mysqli_fetch_assoc($resultat)){

  echo"<select name='patient'><option  type='text'   value='$p' >".$row['nom']."- ".$row['prenom']."(".$row['cin'].")</option></select> <br>";}
 $sql="SELECT * FROM analyse;";


$resultat=mysqli_query($conn,$sql);
		echo"<select name='analyse'>";					
while($r=mysqli_fetch_assoc($resultat)){

echo"<option value='".$r["id_a"]."'>".$r["libelle"]."(".$r["prix"]." DH)</option> 
         ";}
 echo"</select><br>
 <input type='hidden' value=$d name='d'>
 <input type='submit' name='ok'>";










 ?>