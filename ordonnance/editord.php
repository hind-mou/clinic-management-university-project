<?php 


include '../connexion.php';
session_start();
$id=$_POST['id'];
$_SESSION["modifier"]=1;

$sql="SELECT *FROM ordonnance WHERE id_o=$id;";
$resultat=mysqli_query($conn,$sql);



  //obtenir date

  $sql3="SELECT rendez_vous.date_r ,id_pat FROM rendez_vous,consultation,ordonnance WHERE rendez_vous.id_r=consultation.id_r AND consultation.id_c=ordonnance.id_c AND ordonnance.id_o=$id;";
   $resultat3=mysqli_query($conn,$sql3);
  while($row=mysqli_fetch_assoc($resultat3)){
  $date=$row['date_r'];
  $p=$row['id_pat'];
  }
		echo "	<input type='text' name='patient' value='".$p."' > ";
while($row=mysqli_fetch_assoc($resultat)){
echo" <select name='consultation' required='true' id='consultations'>
 <option value='".$date."' disabled selected>".$date."</option>
 
</select><br>
<table style='margin-left: 50px;'>
<input type='hidden' value='".$id."' name='id_o'>
	<th style='color: #0cb0ff;'>medicament</th>
	<th style='color: #0cb0ff;'>posologie</th>";}

	//obtenir les med
	$mid=array();
	$sql4="SELECT id_m , posologie FROM ord_med WHERE id_o='$id' ;";
	$resultat4=mysqli_query($conn,$sql4);
	$med=array();$pos=array();
	while($row=mysqli_fetch_assoc($resultat4)){
		array_push($mid,$row['id_m']);
		//obtenir nom de medicament
		$f="SELECT libelle FROM medicament WHERE id_m=".$row['id_m'].";";
		$re=mysqli_query($conn,$f);
		while($r=mysqli_fetch_assoc($re)){
		 array_push($med,$r['libelle']);	
		}

 array_push($pos,$row['posologie']);
  }
	echo "<tr>
		<td><select style='margin-bottom:10px;' name='med1'>";
		if(!empty($med[0])){
		echo"<option value='".$mid[0]."' >".$med[0]."</option>";}else{
			echo "<option value='' >Choisi...</option>";
		}
		$sql2="SELECT * FROM medicament WHERE libelle NOT LIKE '".$med[0]."';";
  $resultat2=mysqli_query($conn,$sql2);
		 while($r=mysqli_fetch_assoc($resultat2)){
			echo " <option value='".$r['id_m']."' >". $r['libelle']."</option>";} 
			echo "</select></td>
<td><input type='text' name='pos1' placeholder='".$pos[0]."'></td>
	</tr>
	<tr>";

		echo "<td><select style='margin-bottom:10px;'  name='med2'>";
		if(!empty($med[1])){
		echo"<option value='".$mid[1]."' >".$med[1]."</option>";}else{
			echo "<option value='' >Choisi...</option>";
		}$sql2="SELECT * FROM medicament WHERE libelle NOT LIKE '".$med[1]."';";
		 $resultat=mysqli_query($conn,$sql2); while($r=mysqli_fetch_assoc($resultat)){ 
		 echo " <option value='".$r['id_m']."' >". $r['libelle']."</option>";} 
		 echo "</select></td>
<td><input type='text' name='pos2' placeholder='".$pos[1]."'></td>
	</tr>
	<tr>
		<td><select style='margin-bottom:10px;'  name='med3'>";
		if(!empty($med[2])){
		echo"<option value='".$mid[2]."' >".$med[2]."</option>"; }else{
			echo "<option value='' >Choisi...</option>";
		}$sql2="SELECT * FROM medicament WHERE libelle NOT LIKE '".$med[2]."';";
		 $resultat=mysqli_query($conn,$sql2); while($r=mysqli_fetch_assoc($resultat)){ 
			echo " <option value='".$r['id_m']."' >". $r['libelle']."</option>";}
			echo"</select></td>
<td><input type='text' name='pos3' placeholder='".$pos[2]."'></td>
	</tr>
	<tr>
		<td><select style='margin-bottom:10px;'  name='med4'>";
		if(!empty($med[3])){
		echo"<option value='".$mid[3]."' >".$med[3]."</option>";}else{
			echo "<option value='' >Choisi...</option>";
		} $sql2="SELECT * FROM medicament WHERE libelle NOT LIKE '".$med[3]."';";
		  $resultat=mysqli_query($conn,$sql2); $resultat=mysqli_query($conn,$sql); while($r=mysqli_fetch_assoc($resultat)){ 
		 echo " <option value='".$r['id_m']."' >". $r['libelle']."</option>";}
		 echo"</select></td>
<td><input type='text' name='pos4' placeholder='".$pos[3]."'></td>
	</tr>
	<tr>
		<td><select style='margin-bottom:10px;'  name='med5'>";
		if(!empty($med[4])){
		echo"<option value='".$mid[4]."' >".$med[4]."</option>";}else{
			echo "<option value='' >Choisi...</option>";
		} $sql2="SELECT * FROM medicament WHERE libelle NOT LIKE '".$med[4]."';";
		  $resultat=mysqli_query($conn,$sql2); while($r=mysqli_fetch_assoc($resultat)){ 
		 echo " <option value='".$r['id_m']."' >". $r['libelle']."</option>";}
		 echo"</select></td>
<td><input type='text' name='pos5' placeholder='".$pos[4]."'></td>
	</tr>
	<tr>
		<td><select style='margin-bottom:10px;'  name='med6'>";
		if(!empty($med[5])){
		echo"<option value='".$mid[5]."' >".$med[5]."</option>"; }else{
			echo "<option value='' >Choisi...</option>";
		}$sql2="SELECT * FROM medicament WHERE libelle NOT LIKE '".$med[5]."';";
		  $resultat=mysqli_query($conn,$sql2); while($r=mysqli_fetch_assoc($resultat)){ 
		 echo " <option value='".$r['id_m']."' >". $r['libelle']."</option>";}
		 echo"</select></td>
<td><input type='text' name='pos6' placeholder='".$pos[5]."'></td>
	</tr>








</table>
				        

<input type='submit' name='ok'>";


 ?>