<?php 

include '../connexion.php';
session_start();
$id=$_POST['id'];
$_SESSION["modifier"]=1;

$sql="SELECT *FROM rendez_vous WHERE id_r=$id;";
$resultat=mysqli_query($conn,$sql);
if(mysqli_num_rows($resultat)>0){
		
while($row=mysqli_fetch_assoc($resultat)){

echo "				<div class='edition'>	 <select disabled name='patient' required='true' id='select' style='margin-left: 50px;'>
 "; 
//les patients :
 $sql="SELECT * FROM patient WHERE id_pat=".$row['id_pat'].";";


$resultat=mysqli_query($conn,$sql);
							//obtenir le nom et le prenom 
while($r=mysqli_fetch_assoc($resultat)){

echo"<option value='".$r["id_pat"]."'>".$r["nom"]."-".$r["prenom"]." (".$r["cin"].")</option> 
         ";}
 echo"</select><br>";
//afficher les medecins
 echo"<select name='medecin' required='true' style='   margin-left: 50px;
	    margin-top: 15px;'>";

 $sql="SELECT * FROM user WHERE id_u =".$row['id_u'].";";


$resultat=mysqli_query($conn,$sql);
							//obtenir le nom et le prenom 
while($r=mysqli_fetch_assoc($resultat)){

echo"<option value='".$r["id_u"]."'>".$r["nom"]."-".$r["prenom"]." </option> 
         ";}
 $sql="SELECT * FROM user WHERE id_u NOT IN (21,".$row['id_u'].");";


$resultat=mysqli_query($conn,$sql);
//obtenir le nom et le prenom 
while($r=mysqli_fetch_assoc($resultat)){
echo"<option value='".$r["id_u"]."'>".$r["nom"]."-".$r["prenom"]." </option> 
         ";
}

 echo"</select><br>";

echo"<input type='date' name='date' style='margin-left: 30px;
    margin-top: 15px;' value=".$row['date_r'].">
<input type='time' name='time' style='margin-left: 200px;
' value=".$row['time'].">
				        

<input type='submit' name='ok'> </div>";













}

}



















 ?>