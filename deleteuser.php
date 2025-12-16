<?php 
include 'connexion.php';
$id=$_POST['id'];
$sql="DELETE FROM user WHERE id_u=$id;";
$resultat=mysqli_query($conn,$sql);
echo 					"<div class='row header'>
							<div class='cell'>
								Nom et Prenom
							</div>
							<div class='cell'>
								Username
							</div>
							<div class='cell'>
								mot de passe
							</div>

							<div class='cell'>
								Action
							</div>
						</div>";
						
						if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; $start_from = ($page-1) * 8;
						$sql="SELECT * from user  WHERE username NOT LIKE 'admin'LIMIT $start_from,8;";
						

						$resultat=mysqli_query($conn,$sql);
						if(mysqli_num_rows($resultat)>0){
							//obtenir le nom et le prenom 
							while($row=mysqli_fetch_assoc($resultat)){
								
								
								echo"  <div class='row'>
							<div class='cell' data-title='Full Name'>
								".$row['nom']." ".$row['prenom']."
							</div>";
								

								echo" 
							<div class='cell' data-title='Age' style='width:260px;'>
								".$row['username']."
							</div>
							";
							
								echo"<div class='cell' data-title='Job Title'>
								".$row['password']."
							</div>  ";
								

							echo"
							
							<div class='cell' data-title='Location' id='".$row['id_u']."'>
								
								<button id='supprimer' class='s'></button>
								
                                 
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
								

							</div>
						</div>";



						}
							echo"</div>";
					 $sql = "SELECT COUNT(id_u) AS total FROM user";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$total_pages = ceil($row["total"] / 8); // calculer total du pages avec resultat
  echo"<p style='margin-left: 240px;
    display: inline;color: #5f5e5e;'>pages :</p>";
for ($i=1; $i<=$total_pages; $i++) {  // print href pour tous les pages
            echo "<a href='admin.php?page=".$i."'";
            if ($i==$page)  {echo " style='margin-left:10px;color:gray;' ";}else{echo "<a style='margin-left:10px;' ";};
            echo " >".$i."</a>"; 
}; 