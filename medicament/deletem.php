<?php 
include '../connexion.php';
$id=$_POST['id'];
$sql="DELETE FROM medicament WHERE id_m=$id;";
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
						$sql="SELECT * from medicament  LIMIT $start_from,8;";
						

						$resultat=mysqli_query($conn,$sql);
						if(mysqli_num_rows($resultat)>0){
							//obtenir le nom et le prenom 
							while($row=mysqli_fetch_assoc($resultat)){
								echo"  <div class='row'>
							<div class='cell' data-title='Full Name'>
								".$row['libelle']."
							</div>";
								$id_m=$row['id_m'];
								$sql2="SELECT rendez_vous.date_r from rendez_vous,consultation,ordonnance,ord_med where id_m=$id_m and ord_med.id_o=ordonnance.id_o AND ordonnance.id_c=consultation.id_c AND consultation.id_r=rendez_vous.id_r GROUP BY id_m ORDER BY date_r DESC LIMIT 1";
								
								$resultat2=mysqli_query($conn,$sql2);
								if(mysqli_num_rows($resultat2)>0){
								while($row2=mysqli_fetch_assoc($resultat2)){
									
								echo "<div class='cell' data-title='Age' style='width:260px;'>
								".$row2['date_r']."
							</div>";}}
							else {
								echo "<div class='cell' data-title='Age' style='width:260px;'>
								__________
							</div>";
							}
								

								echo" 
							
							<div class='cell' data-title='Job Title'>
								
							</div>
							<div class='cell' data-title='Location' id=".$row['id_m'].">
							
						<button id='modifier' class='m' ></button>

								<button id='supprimer' class='s'></button>
								<button id='info' class='i'></button>
                                 
							</div>
						</div>";

							}}

						else {
                        
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
					 $sql = "SELECT COUNT(id_m) AS total FROM medicament";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$total_pages = ceil($row["total"] / 8); // calculer total du pages avec resultat
  echo"<p style='margin-left: 240px;
    display: inline;color: #5f5e5e;'>pages :</p>";
for ($i=1; $i<=$total_pages; $i++) {  // print href pour tous les pages
            echo "<a href='medicament.php?page=".$i."'";
            if ($i==$page)  {echo " style='margin-left:10px;color:gray;' ";}else{echo "<a style='margin-left:10px;' ";};
            echo " >".$i."</a>"; 
}; 

 
?>