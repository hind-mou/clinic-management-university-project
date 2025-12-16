<?php 
session_start();
include 'connexion.php';
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; $start_from = ($page-1) * 8;
$cin=$_POST['cin'];
$nom=$_POST['nom'];

$sql="SELECT * FROM patient WHERE  ";

if($cin==""){
	$sql=$sql."nom='$nom'  LIMIT $start_from,8;";
}elseif($nom==""){
$sql=$sql."cin='$cin' LIMIT $start_from,8;";
}else{
	$sql=$sql."cin='$cin' AND nom='$nom'LIMIT $start_from,8;";
}
$resultat=mysqli_query($conn,$sql);
echo "<div class='row header'>
							<div class='cell'>
								CIN
							</div>
							<div class='cell'>
								Nom
							</div>
							<div class='cell'>
								Prenom
							</div>
							<div class='cell'>
								Action
							</div>
						</div>";

$nb=0;
					if(mysqli_num_rows($resultat)>0){
						
							while($row=mysqli_fetch_assoc($resultat)){
								$nb+=1;
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
								<button id='supprimer' class='s'></button>
								<button id='info' class='i'></button>
                                 
							</div>
						</div>";

							}
						}else{


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
					 

$total_pages = ceil($nb / 8); // calculer total du pages avec resultat
  echo"<p style='margin-left: 240px;
    display: inline;color: #5f5e5e;'>pages :</p>";
for ($i=1; $i<=$total_pages; $i++) {  // print href pour tous les pages
            echo "<a href='patient.php?page=".$i."'";
            if ($i==$page)  {echo " style='margin-left:10px;color:gray;' ";}else{echo "<a style='margin-left:10px;' ";};
            echo " >".$i."</a>"; 
}; 












 ?>