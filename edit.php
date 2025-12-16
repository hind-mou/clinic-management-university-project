
<?php 
include 'connexion.php';
session_start();
$_SESSION["modifier"]=1;
$id=$_POST['id'];
$sql="SELECT *FROM patient WHERE id_pat=$id;";
$resultat=mysqli_query($conn,$sql);
if(mysqli_num_rows($resultat)>0){
		
while($row=mysqli_fetch_assoc($resultat)){
 echo"

 <input type='hidden' type='text'  name='id' value='".$row['id_pat']."' >

						<input type='text'  value='".$row['cin']."' disabled>
				        <input type='text' name='nom' value='".$row['nom']."'>
				        <input type='text' name='prenom' value='".$row['prenom']."'>
				        <input type='date' name='date' value='".$row['date_naissance']."'>
				        <input type='text' name='tel' value='".$row['tel']."'>
				        <input type='email' name='email' value='".$row['email']."'>
				        <input type='text' name='adresse' value='".$row['adresse']."'>
				       <select name='nationalite'>
				       ";
				       $s=false;
				       if($row['sexe']==1){
				       	$s=true;
				       }
				       $r=$row['id_n'];

  					$sql2="SELECT libelle FROM nationalite WHERE id_n=$r;";
  					$resultat2=mysqli_query($conn,$sql);

  					while($row2=mysqli_fetch_assoc($resultat2)){
  						$n=$row2['libelle'];
  					}

				       echo"
 <option value='' disabled >nationalite</option>
  <option value='maroc'  ";if(strcmp("maroc",$n)==0)echo "selected";echo">maroc</option>
  <option value='france'  ";if(strcmp("france",$n)==0)echo "selected";echo">france</option>
  <option value='algerie'  ";if(strcmp("algerie",$n)==0)echo "selected";echo">algerie</option>
  <option value='tunisie'  ";if(strcmp("tunisie",$n)==0)echo "selected";echo">tunisie</option>
</select><br>
<label for='male'class='rad'>homme
<input type='radio' id='male' name='gender' value='m' ";if(!$s)echo "checked";echo">
<span class='checkmark'></span></label>
<label for='female' class='rad'>femme

<input type='radio' id='female' name='gender' value='f' ";if($s)echo "checked";echo"> <span class='checkmark'></span>
</label>
				       
<textarea  name='maladies'>".$row['maladies_chroniques']."</textarea> 
				        

<input type='submit' name='ok'>";
}
}

						 ?>

