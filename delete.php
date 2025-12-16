<?php 
include 'connexion.php';
$id=$_POST['id'];
$sql="DELETE FROM patient WHERE id_pat=$id;";
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

$sql="SELECT * from patient ORDER BY date_creation DESC LIMIT $start_from,8;";
						$resultat=mysqli_query($conn,$sql);
						
							while($row=mysqli_fetch_assoc($resultat)){
								echo"<div class='row'>
							<div class='cell' data-title='Full Name'>
								".$row['cin']."
							</div>
							<div class='cell' data-title='Age'>
								".$row['nom']."
							</div>
							<div class='cell' data-title='Job Title'>
								".$row['prenom']."
							</div>
							<div class='cell' data-title='Location' id=".$row['id_pat'].">
								<button id='modifier'  class='m' ></button>
								<button id='supprimer' class='s' ></button>
								<button id='info' class='i'></button>
                                 
							</div>
						</div>";

							}
							echo"</div>";
					 $sql = "SELECT COUNT(id_pat) AS total FROM patient";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$total_pages = ceil($row["total"] / 8); // calculer total du pages avec resultat
  echo"<p style='margin-left: 240px;
    display: inline;color: #5f5e5e;'>pages :</p>";
for ($i=1; $i<=$total_pages; $i++) {  // print href pour tous les pages
            echo "<a href='patient.php?page=".$i."'";
            if ($i==$page)  {echo " style='margin-left:10px;color:gray;' ";}else{echo "<a style='margin-left:10px;' ";};
            echo " >".$i."</a>"; 
}; 










 ?>