
<?php 
include '../connexion.php';
session_start();
$id=$_POST['id'];
$_SESSION["modifier"]=1;
$sql="SELECT *FROM medicament WHERE id_m=$id;";
$resultat=mysqli_query($conn,$sql);
if(mysqli_num_rows($resultat)>0){
		
while($row=mysqli_fetch_assoc($resultat)){
 echo" <input type='hidden' type='text'  name='id' value='".$row['id_m']."' >
 
 <input type='text' name='titre' placeholder='titre' required='true' id='cin' value='".$row['libelle']."'>
				        
<br>
				        

<input type='submit' name='ok'>";}} ?>
