<?php 


session_start();
include '../connexion.php';
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; $start_from = ($page-1) * 8;
$nb=0;
$debut=$_POST['debut'];
$fin=$_POST['fin'];

echo "<div class='row header'>
							<div class='cell'>
								Nom et Prenom
							</div>
							<div class='cell'>
								Date et heure
							</div>
							<div class='cell'>
								medecin
							</div>

							<div class='cell'>
								Action
							</div>
						</div>";
						$sql="SELECT * from rendez_vous WHERE CAST(date_r AS DATE) BETWEEN  '$debut' AND '$fin'  LIMIT $start_from,8;";
						$resultat=mysqli_query($conn,$sql);
						if(mysqli_num_rows($resultat)>0){
							$nb+=1;
							//obtenir le nom et le prenom 
							while($row=mysqli_fetch_assoc($resultat)){
								$id_pat=$row['id_pat'];
								$sql2="SELECT nom,prenom from patient WHERE id_pat='$id_pat';";
								$resultat2=mysqli_query($conn,$sql2);
								while($row2=mysqli_fetch_assoc($resultat2)){
								echo"  <div class='row'>
							<div class='cell' data-title='Full Name'>
								".$row2['nom']." ".$row2['prenom']."
							</div>";
								}

								echo" 
							<div class='cell' data-title='Age' style='width:260px;'>
								".$row['date_r']."  → ".$row['time']."
							</div>";
							$u=$row['id_u'];
							$sql3="SELECT nom from user WHERE id_u='$u';";
								$resultat3=mysqli_query($conn,$sql3);
							while($row3=mysqli_fetch_assoc($resultat3)){
							echo "<div class='cell' data-title='Job Title'>
								".$row3['nom']."
							</div>";}
							echo"<div class='cell' data-title='Location' id=".$row['id_r'].">
								<button id='modifier' class='m'></button>
								<button id='supprimer' class='s'></button>
								<button id='info' class='i'></button>
                                 
							</div>
						</div>";

							}

						}else {
                        
							echo"<div class='row'>
							<div class='cell' data-title='Full Name'>
								pas de resultat
							</div>
							<div class='cell' data-title='Age'>
								__________
							</div>
							<div class='cell' data-title='Job Title'>
								__________
							</div>
							<div class='cell' data-title='Location'>
							<button id='modifier'></button>
								<button id='supprimer'></button>
								<button id='info'></button>

							</div>
						</div>";



						}
							echo"</div>";

$total_pages = ceil($nb/ 8); // calculer total du pages avec resultat
  echo"<p style='margin-left: 240px;
    display: inline;color: #5f5e5e;'>pages :</p>";
for ($i=1; $i<=$total_pages; $i++) {  // print href pour tous les pages
            echo "<a href='rendez.php?page=".$i."'";
            if ($i==$page)  {echo " style='margin-left:10px;color:gray;' ";}else{echo "<a style='margin-left:10px;' ";};
            echo " >".$i."</a>"; 
}; 

 




















 ?>