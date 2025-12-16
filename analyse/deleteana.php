<?php 
include '../connexion.php';
$id=$_POST['id'];
$id_pat=substr($id,0,3);
$date_a=substr($id, 4);
$sql="DELETE FROM patient_analyse WHERE id_pat='$id_pat' AND date_a='$date_a';";
$resultat=mysqli_query($conn,$sql);
echo "<div class='row header'>
							<div class='cell'>
								Nom et Prenom
							</div>
							<div class='cell'>
								Date
							</div>
							<div class='cell'>
								type
							</div>
							<div class='cell'>
								Action
							</div>
						</div>";
										if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; $start_from = ($page-1) * 8;
										$sql="SELECT * from patient_analyse ORDER BY date_a DESC LIMIT $start_from,8;";
						

						$resultat=mysqli_query($conn,$sql);
						if(mysqli_num_rows($resultat)>0){
							//obtenir le nom et le prenom 
							while($row=mysqli_fetch_assoc($resultat)){
								$id=$row['id_pat'];
								$sql2="SELECT nom,prenom from patient WHERE id_pat='$id'  ;";
								
								$resultat2=mysqli_query($conn,$sql2);
								while($row2=mysqli_fetch_assoc($resultat2)){
								echo"  <div class='row'>
							<div class='cell' data-title='Full Name'>
								".$row2['nom']." ".$row2['prenom']."
							</div>";
								}

								echo" 
							<div class='cell' data-title='Age' style='width:260px;'>
								".$row['date_a']."
							</div>
							";
							$id=$row['id_ana'];
							$sql3="SELECT libelle from analyse WHERE id_a='$id'  ;";
								
								$resultat3=mysqli_query($conn,$sql3);
								while($row3=mysqli_fetch_assoc($resultat3)){
								echo"<div class='cell' data-title='Job Title'>
								".$row3['libelle']."
							</div>  ";
								}

							echo"
							
							<div class='cell' data-title='Location' id=".$row['id_ana']."-".$row['date_a'].">
								<button id='modifier'></button>
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
					 $sql = "SELECT COUNT(id_pat) AS total FROM patient_analyse";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$total_pages = ceil($row["total"] / 8); // calculer total du pages avec resultat
  echo"<p style='margin-left: 240px;
    display: inline;color: #5f5e5e;'>pages :</p>";
for ($i=1; $i<=$total_pages; $i++) {  // print href pour tous les pages
            echo "<a href='analyse.php?page=".$i."'";
            if ($i==$page)  {echo " style='margin-left:10px;color:gray;' ";}else{echo "<a style='margin-left:10px;' ";};
            echo " >".$i."</a>"; 
}; 

 
?>