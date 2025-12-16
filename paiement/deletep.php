<?php 
include '../connexion.php';
$id=$_POST['id'];
$sql="DELETE FROM paiement WHERE id_p=$id;";
$resultat=mysqli_query($conn,$sql);
echo "<div class='row header'>
							<div class='cell'>
								Nom et Prenom
							</div>
							<div class='cell'>
								Date
							</div>
							<div class='cell'>
								Montant
							</div>
							<div class='cell'>
								Action
							</div>
						</div>";
										if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; $start_from = ($page-1) * 8;
						$sql="SELECT * from paiement ORDER BY date_p DESC LIMIT $start_from,8;";
						

						$resultat=mysqli_query($conn,$sql);
						if(mysqli_num_rows($resultat)>0){
							//obtenir le nom et le prenom 
							while($row=mysqli_fetch_assoc($resultat)){
								$id_c=$row['id_c'];
								$sql2="SELECT consultation.id_c,rendez_vous.id_r,patient.nom,patient.prenom from consultation,rendez_vous,patient WHERE consultation.id_c='$id_c' AND rendez_vous.id_r=consultation.id_r AND rendez_vous.id_pat=patient.id_pat  ;";
								
								$resultat2=mysqli_query($conn,$sql2);
								while($row2=mysqli_fetch_assoc($resultat2)){
								echo"  <div class='row'>
							<div class='cell' data-title='Full Name'>
								".$row2['nom']." ".$row2['prenom']."
							</div>";
								}

								echo" 
							<div class='cell' data-title='Age' style='width:260px;'>
								".$row['date_p']."
							</div>
							<div class='cell' data-title='Job Title'>
								".$row['montant']."
							</div>
							<div class='cell' data-title='Location' id=".$row['id_p'].">
								
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
								<button id='supprimer'></button>
								<button id='info'></button>

							</div>
						</div>";



						}
							echo"</div>";
					 $sql = "SELECT COUNT(id_p) AS total FROM paiement";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$total_pages = ceil($row["total"] / 8); // calculer total du pages avec resultat
  echo"<p style='margin-left: 240px;
    display: inline;color: #5f5e5e;'>pages :</p>";
for ($i=1; $i<=$total_pages; $i++) {  // print href pour tous les pages
            echo "<a href='paiement.php?page=".$i."'";
            if ($i==$page)  {echo " style='margin-left:10px;color:gray;' ";}else{echo "<a style='margin-left:10px;' ";};
            echo " >".$i."</a>"; 
}; 