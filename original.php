<?php 
session_start();
$_SESSION["modifier"]=0;
echo "<div class='contenu'>
					<hr>
					<button id='fermer'></button>
					<h2 style='font-family: Poppins-Bold;    color: #8a8a8a;margin-left: 130px;'>Ajouter un patient</h2>
<form action='ajouter.php' method='POST' class='ajouterf'>
<input type='text' name='cin' placeholder='CIN' >
				        <input type='text' name='nom' placeholder='nom' required='true'>
				        <input type='text' name='prenom' placeholder='prenom' required='true'>
				        <input type='date' name='date' placeholder='date de naissance' required='true'>
				        <input type='text' name='tel' placeholder='tel' required='true'>
				        <input type='email' name='email' placeholder='email'>
				        <input type='text' name='adresse' placeholder='adresse' required='true'>
				       <select name='nationalite' required='true'>
 <option value='' disabled selected>nationalite</option>
  <option value='maroc'>maroc</option>
  <option value='france'>france</option>
  <option value='algerie'>algerie</option>
  <option value='tunisie'>tunisie</option>
</select><br>
<label for='male'class='rad'>homme
<input type='radio' id='male' name='gender' value='m'>
<span class='checkmark'></span></label>
<label for='female' class='rad'>femme

<input type='radio' id='female' name='gender' value='f'> <span class='checkmark'></span>
</label>
				       
<textarea  name='maladies' placeholder='maladies chroniques'></textarea> 
				        

<input type='submit' name='ok'>	</form>
					
				</div>";


















 ?>