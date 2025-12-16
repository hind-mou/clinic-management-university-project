<!DOCTYPE html>
<?php 
include 'connexion.php';
session_start();
$_SESSION["modifier"]=0;
 ?>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>paiement</title>
		<meta name="description" content="A sidebar menu as seen on the Google Nexus 7 website" />
		<meta name="keywords" content="google nexus 7 menu, css transitions, sidebar, side menu, slide out menu" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
			<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="table/images/icons/favicon.ico"/>

<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="table/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="table/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="table/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="table/vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="table/css/util.css">
	<link rel="stylesheet" type="text/css" href="table/css/main.css">
		<script src="js/modernizr.custom.js"></script>
		<style type="text/css">
			@import url(http://fonts.googleapis.com/css?family=Lato:300,400,700);
@font-face {
	font-family: 'codropsicons';
	src:url('../fonts/codropsicons/codropsicons.eot');
	src:url('../fonts/codropsicons/codropsicons.eot?#iefix') format('embedded-opentype'),
		url('../fonts/codropsicons/codropsicons.woff') format('woff'),
		url('../fonts/codropsicons/codropsicons.ttf') format('truetype'),
		url('../fonts/codropsicons/codropsicons.svg#codropsicons') format('svg');
	font-weight: normal;
	font-style: normal;
}

body {
	
background-color: #c4d3f6;
	background-size: 100%;
}

.container > header,
.codrops-top {
	color: #fff;
	font-family: 'Lato', Arial, sans-serif;
}

.container > header {
	margin: 0 auto;
	padding: 12em 2em;
	padding-left: 370px;
	background: rgba(0,0,0,0.05);
}

.container > header a {
	color: #566473;
	text-decoration: none;
	outline: none;
}

.container > header a:hover {
	color: #4f7bab;
}

.container > header h1 {
	font-size: 3.2em;
	line-height: 1.3;
	margin: 0;
	font-weight: 300;
}

.container > header span {
	display: block;
	font-size: 55%;
	color: #74818e;
	padding: 0 0 0.6em 0.1em;
}

/* To Navigation Style */
.codrops-top {
	background: #fff;
	background: rgba(255, 255, 255, 0.6);
	text-transform: uppercase;
	width: 100%;
	font-size: 0.69em;
	line-height: 2.2;
}

.codrops-top a {
	text-decoration: none;
	padding: 0 1em;
	letter-spacing: 0.1em;
	color: #888;
	display: inline-block;
}

.codrops-top a:hover {
	background: rgba(255,255,255,0.95);
	color: #333;
}

.codrops-top span.right {
	float: right;
}

.codrops-top span.right a {
	float: left;
	display: block;
}

.codrops-icon:before {
	font-family: 'codropsicons';
	margin: 0 4px;
	speak: none;
	font-style: normal;
	font-weight: normal;
	font-variant: normal;
	text-transform: none;
	line-height: 1;
	-webkit-font-smoothing: antialiased;
}

.codrops-icon-drop {

	background-image:url("css/social.png");
		background-size: 50%;
		background-repeat: no-repeat;
           background-position: center;
}


.codrops-icon-prev:before {
	content:url("css/sign.png");
}

/* Demo Buttons Style */
.codrops-demos {
	padding-top: 1em;
	font-size: 0.9em;
}

.codrops-demos a {
	text-decoration: none;
	outline: none;
	display: inline-block;
	margin: 0.5em;
	padding: 0.7em 1.1em;
	border: 3px solid #b1aea6;
	color: #b1aea6;
	font-weight: 700;
}

.codrops-demos a:hover,
.codrops-demos a.current-demo,
.codrops-demos a.current-demo:hover {
	border-color: #89867e;
	color: #89867e;
}

@media screen and (max-width: 1025px) {
	.container > header {
		margin: 0 auto;
		padding: 120px 50px;
		font-size: 70%;
		text-align: right;
	}
}

@media screen and (max-width: 740px) {

	.codrops-icon span {
		display: none;
	}

}


/*.........................................component ici ..................................*/



*,
*:after,
*::before {
		-webkit-box-sizing: border-box;
		-moz-box-sizing: border-box;
		box-sizing: border-box;
}

@font-face {
		font-weight: normal;
		font-style: normal;
		font-family: 'ecoicons';
		src: url("../fonts/ecoicons/ecoicons.eot");
		src: url("../fonts/ecoicons/ecoicons.eot?#iefix") format("embedded-opentype"), url("../fonts/ecoicons/ecoicons.woff") format("woff"), url("../fonts/ecoicons/ecoicons.ttf") format("truetype"), url("../fonts/ecoicons/ecoicons.svg#ecoicons") format("svg");
}

/* Icomoon.com */

.gn-menu-main,
.gn-menu-main ul {
		margin: 0;
		padding: 0;
		background: white;
		color: #5f6f81;
		list-style: none;
		text-transform: none;
		font-weight: 300;
		font-family: 'Lato', Arial, sans-serif;
		line-height: 60px;
}

.gn-menu-main {
		position: fixed;
		top: 0;
		left: 0;
		width: 100%;
		height: 60px;
		font-size: 13px;
		z-index: 1;
}

.gn-menu-main a {
		display: block;
		height: 100%;
		color: #5f6f81;
		text-decoration: none;
		cursor: pointer;
}


.no-touch .gn-menu-main a:hover,
.no-touch .gn-menu li.gn-search-item:hover,
.no-touch .gn-menu li.gn-search-item:hover a {
		background: #5f6f81;
		color: white;
}
a.codrops-icon.codrops-icon-drop:hover{
background-image: url("css/social2.png");
background-size: 50%;
background-repeat: no-repeat;
background-position: center;
}

.gn-menu-main > li {
		display: block;
		float: left;
		height: 100%;
		border-right: 1px solid #c6d0da;
		text-align: center;
}

/* icon-only trigger (menu item) */

.gn-menu-main li.gn-trigger {
		position: relative;
		width: 60px;
		-webkit-touch-callout: none;
		-webkit-user-select: none;
		-khtml-user-select: none;
		-moz-user-select: none;
		-ms-user-select: none;
		user-select: none;
}

.gn-menu-main > li:last-child {
		float: right;
		border-right: none;
		border-left: 1px solid #c6d0da;
}

.gn-menu-main > li > a {
		padding: 0 30px;
		text-transform: uppercase;
		letter-spacing: 1px;
		font-weight: bold;
}

.gn-menu-main:after {
		display: table;
		clear: both;
		content: "";
}

.gn-menu-wrapper {
		position: fixed;
		top: 60px;
		bottom: 0;
		left: 0;
		overflow: hidden;
		width: 60px;
		border-top: 1px solid #c6d0da;
		background: white;
		-webkit-transform: translateX(-60px);
		-moz-transform: translateX(-60px);
		transform: translateX(-60px);
		-webkit-transition: -webkit-transform 0.3s, width 0.3s;
		-moz-transition: -moz-transform 0.3s, width 0.3s;
		transition: transform 0.3s, width 0.3s;
}

.gn-scroller {
		position: absolute;
		overflow-y: scroll;
		width: 370px;
		height: 100%;
}

.gn-menu {
		border-bottom: 1px solid #c6d0da;
		text-align: left;
		font-size: 18px;
}

.gn-menu li:not(:first-child),
.gn-menu li li {
		box-shadow: inset 0 1px #c6d0da
}

.gn-submenu li {
		overflow: hidden;
		height: 0;
		-webkit-transition: height 0.3s;
		-moz-transition: height 0.3s;
		transition: height 0.3s;
}

.gn-submenu li a {
		color: #c1c9d1
}

input.gn-search {
		position: relative;
		z-index: 10;
		padding-left: 60px;
		outline: none;
		border: none;
		background: transparent;
		color: #5f6f81;
		font-weight: 300;
		font-family: 'Lato', Arial, sans-serif;
		cursor: pointer;
}

/* placeholder */

.gn-search::-webkit-input-placeholder {
		color: #5f6f81
}

.gn-search:-moz-placeholder {
		color: #5f6f81
}

.gn-search::-moz-placeholder {
		color: #5f6f81
}

.gn-search:-ms-input-placeholder {
		color: #5f6f81
}

/* hide placeholder when active in Chrome */

.gn-search:focus::-webkit-input-placeholder,
.no-touch .gn-menu li.gn-search-item:hover .gn-search:focus::-webkit-input-placeholder {
		color: transparent
}

input.gn-search:focus {
		cursor: text
}

.no-touch .gn-menu li.gn-search-item:hover input.gn-search {
		color: white
}

/* placeholder */

.no-touch .gn-menu li.gn-search-item:hover .gn-search::-webkit-input-placeholder {
		color: white
}

.no-touch .gn-menu li.gn-search-item:hover .gn-search:-moz-placeholder {
		color: white
}

.no-touch .gn-menu li.gn-search-item:hover .gn-search::-moz-placeholder {
		color: white
}

.no-touch .gn-menu li.gn-search-item:hover .gn-search:-ms-input-placeholder {
		color: white
}

.gn-menu-main a.gn-icon-search {
		position: absolute;
		top: 0;
		left: 0;
		height: 60px;
}

.gn-icon::before {
		display: inline-block;
		width: 60px;
		text-align: center;
		text-transform: none;
		font-weight: normal;
		font-style: normal;
		font-variant: normal;
		font-family: 'ecoicons';
		line-height: 1;
		speak: none;
		-webkit-font-smoothing: antialiased;
}

.gn-icon-help::before {
	content:url("css/medical.png");
}

.gn-icon-earth::before {
		content: "\e004"
}

.gn-icon-cog::before {
content:url("css/edit.png");
}

.gn-icon-search::before {
		content: "\e005"
}

.gn-icon-download::before {
	content:url("css/writing.png");


}

.gn-icon-photoshop::before {
	content:url("css/business.png");

}

.gn-icon-illustrator::before {
	content:url("css/time.png");
}

.gn-icon-archive::before {
	content:url("css/pil.png");
}

.gn-icon-article::before {
		content:url("css/stati.png");
}

.gn-icon-pictures::before {
		content: "\e008"
}

.gn-icon-videos::before {
		content: "\e009"
}

/* if an icon anchor has a span, hide the span */

.gn-icon span {
		width: 0;
		height: 0;
		display: block;
		overflow: hidden;
}

.gn-icon-menu::before {
		margin-left: -15px;
		vertical-align: -2px;
		width: 30px;
		height: 3px;
		background: #5f6f81;
		box-shadow: 0 3px white, 0 -6px #5f6f81, 0 -9px white, 0 -12px #5f6f81;
		content: '';
}

.no-touch .gn-icon-menu:hover::before,
.no-touch .gn-icon-menu.gn-selected:hover::before {
		background: white;
		box-shadow: 0 3px #5f6f81, 0 -6px white, 0 -9px #5f6f81, 0 -12px white;
}

.gn-icon-menu.gn-selected::before {
		background: #5993cd;
		box-shadow: 0 3px white, 0 -6px #5993cd, 0 -9px white, 0 -12px #5993cd;
}

/* styles for opening menu */

.gn-menu-wrapper.gn-open-all,
.gn-menu-wrapper.gn-open-part {
		-webkit-transform: translateX(0px);
		-moz-transform: translateX(0px);
		transform: translateX(0px);
}

.gn-menu-wrapper.gn-open-all {
		width: 340px
}

.gn-menu-wrapper.gn-open-all .gn-submenu li {
		height: 60px
}

@media screen and (max-width: 422px) { 
	.gn-menu-wrapper.gn-open-all {
			-webkit-transform: translateX(0px);
			-moz-transform: translateX(0px);
			transform: translateX(0px);
			width: 100%;
	}

	.gn-menu-wrapper.gn-open-all .gn-scroller {
			width: 130%
	}
}
#titre {
	font-size: 20px;
}




/*.....................................................................................*/





table {
	margin-top:20px;
}
.recherche {

    margin-top: -660px;
background-color: white;
padding: 20px;
margin-right: 300px;
margin-left: 200px;
width: 950px;
border-radius: 6px;
display: flow-root;
margin-top: -60px;
position: absolute;


}
.recherche input {
	height: 30px;
 box-shadow: 0 0 4px 0px black;
margin-left: 9px;
    display: table-column-group;
}
.recherche button {
    background-color: #76a7f1;
    color: white;
    box-shadow: 0 0 4px black;
    padding: 6px;
}
#find {
    background-color: #9eafff;
    color: white;
    width: 200px;
    margin-left: 8px;
}


button#add {

    background-image: url(add.png);
    background-position: center;
    background-repeat: no-repeat;
    background-size: 60%;
    height: 31px;
    width: 40px;
    margin-left: 8px;
    position: absolute;
  margin-top: 0px;
    margin-left: 50px;

}
.ajouter  {
	width: 100%;
	 height: 100vh;
	background-color: rgba(0,0,0,0.5);
	position: fixed;
	top: 0;
	display: flex;
	justify-content: center;
	align-items: center;
	bottom:0;
	display: table;
    padding: 50px;
	visibility: hidden;



}
.contenu {
	width: 500px;
	height: 360px;
	background-color: white;
	border-radius: 4px;
	 margin-left: 400px;

}
button#fermer {

    background-image: url(close.png);
    background-position: center;
    background-repeat: no-repeat;
    background-size: 60%;
    width: 50px;
    height: 50px;
    margin-left: 450px;
}
.ajouterf input {
	height: 30px;
 box-shadow: 0 0 2px 0px black;
margin-left: 9px;
    display: list-item;

}
button#modifier {

	 background-image: url(edit.png);
	 background-position: center;
    background-repeat: no-repeat;

       width: 30px;
    height: 20px;
 
    background-size: 70%;
}
button#supprimer {

	 background-image: url(delete.png);
	 background-position: center;
    background-repeat: no-repeat;
           width: 30px;
    height: 20px;
 
    background-size: 70%;
}
button#info {

	 background-image: url(info.png);
	 background-position: center;
    background-repeat: no-repeat;
       width: 30px;
    height: 20px;
 
    background-size: 70%;
}


/*..........................form dajout.........................................
*/
hr {
height: 14px;
    border-width: 0;
    color: gray;
    background-color: gray;
}

form.ajouterf {
    margin-top: 30px;

}
.ajouterf input[type="text"] {

 width: 90%;
    padding: 12px 20px;
    box-sizing: border-box;
    margin-left: 20px;
    margin-bottom: 8px;

}
.ajouterf input[type="date"] {

 width: 90%;
    padding: 12px 20px;
    box-sizing: border-box;
    margin-left: 20px;
    margin-bottom: 8px;

}
.ajouterf input[type="email"] {

 width: 90%;
    padding: 12px 20px;
    box-sizing: border-box;
    margin-left: 20px;
    margin-bottom: 8px;

}
textarea {
  width: 80%;
  height: 150px;
  padding: 12px 20px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  background-color: #f8f8f8;
  resize: none;
  margin-left: 20px;
}
select {
  width: 80%;
  padding: 16px 20px;
  border: none;
  border-radius: 4px;
  background-color: #f1f1f1;
    margin-left: 20px;

}


.rad {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 18px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
      margin-left: 20px;
    margin-top: 8px;
    color: #5f4c4c;
}

/* Hide the browser's default radio button */
.rad input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
}

/* Create a custom radio button */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
  border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.rad:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.rad input:checked ~ .checkmark {
  background-color: #2196F3;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the indicator (dot/circle) when checked */
.rad input:checked ~ .checkmark:after {
  display: block;
}

/* Style the indicator (dot/circle) */
.rad .checkmark:after {
 	top: 9px;
	left: 9px;
	width: 8px;
	height: 8px;
	border-radius: 50%;
	background: white;
}
.ajouterf input[type="submit"]
{

margin-top: 10px;
       margin-left: 120px;
    background-color: #76a7f1;
    color: white;
    box-shadow: 0 0 4px black;
    padding: 6px;
    width: 200px;
}
.curpage {
	color: gray;
}
#chercher{
	   background-image: url(search.png);
    background-position: center;
    background-repeat: no-repeat;
    background-size: 60%;
    width: 50px;
    height: 50px;
    position: absolute;
    margin-left: 430px;
}

		</style>
		<script src="jquery-1.12.4.min.js"></script>
	</head>
	<body>
		<div class="container">
			<ul id="gn-menu" class="gn-menu-main">
				<li class="gn-trigger">
					<a class="gn-icon gn-icon-menu"><span>Menu</span></a>
					<nav class="gn-menu-wrapper">
						<div class="gn-scroller">
							<ul class="gn-menu">
								
								<li>
									<a class="gn-icon gn-icon-download" href="patient.php">Dossiers médicaux des patients</a>
									
										<li><a class="gn-icon gn-icon-illustrator"href="rendez.php">rendez-vous</a></li>
										<li><a class="gn-icon gn-icon-photoshop"href="paiement.php">Gestion de paiement</a></li>
									
								</li>
								
								<li><a class='gn-icon gn-icon-help' href='analyse.php'>analyse</a></li>
								<?php 
								if($_SESSION["user"]==2){
									
								}else{
									echo "
									<li><a class='gn-icon gn-icon-cog'href='ordonnance.php'>Ordonnances</a></li>
								
								<li>
									<a class='gn-icon gn-icon-archive' href='medicament.php'>médicaments</a></li>
								
										<li><a class='gn-icon gn-icon-article' href='statistique.php'>statistiques</a></li>";
								}


								 ?>
							</ul>
						</div><!-- /gn-scroller -->
					</nav>
				</li>
				<li></a></li>
				<li><a class="codrops-icon codrops-icon-prev" id="titre" href="index.php">Cabinet medical</a></li>
				<li><a class="codrops-icon codrops-icon-drop" href="profil.php"></a></li>
			</ul>
			<div class="recherche">
					<label>date debut : </label>
					<input type="date" name="debut" placeholder="date debut" id="debut" > 
					<label> date fin : </label>

					<input type="date" name="fin"  placeholder="date fin" id="fin">
                    <button name="recherche" value="recherche" id="find">recherche</button>
                    

				
				<button id="add"></button>
			</div>
			<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class='don'>
					<div class="table">
						<div class="row header">
							<div class="cell">
								Nom et Prenom
							</div>
							<div class="cell">
								Date
							</div>
							<div class="cell">
								Montant
							</div>

							<div class="cell">
								Action
							</div>
						</div>
						<?php 
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

 

						 ?>

						
						

				</div>
			</div>
		</div>

	</div>


			 
		</div><!-- /container -->

		
			<div class="ajouter">
				<div class="contenu">
					<hr>
					<button id="fermer"></button>
					<h2  id="phrase"style="font-family: Poppins-Bold;    color: #8a8a8a;margin-left: 130px;">Ajouter  paiemant</h2>
					<form action="paiement/ajouterpaiement.php" method="POST" class="ajouterf">

						<input type="text" name="cin" placeholder="CIN" required="true" id="cin">
				        <input type="text" name="montant" placeholder="montant" >

				        <button id="chercher"></button>
				       <select name="id" required="true" id="consultations">
 <option value="" disabled selected>consultation</option>
 
</select><br>
				        

<input type="submit" name="ok">
					</form>
					
				</div>
				
			</div>
		<script src="js/classie.js"></script>
		<script src="js/gnmenu.js"></script>
		<script src="table/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	
	<script src="table/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="table/js/main.js"></script>
		<script>

			$(document).ready(function(){
				var id=0;
			

				//pour chercher les consultations par cin 
				$("#chercher").click(function(){
					var code=$("#cin").val();
					$.post("paiement/seggestion.php", {
						cin:code
					},function(data,status){
						//pour séparer les options de select
						var arr=data.split("/");
						for (var i = 0; i < arr.length; i++) {
							
							var o = new Option;
							$(o).html(arr[i]);
						$("#consultations").append(o);
						}
						

					})
				});
			
	

			 // pour la suppression
			  $(document).on ("click", ".s", function () {

				if (confirm("voulez-vous vraiment supprimer ce paiement?")) {
   				$(".don").load("paiement/deletep.php",{
              id:this.parentNode.id
            
            
								});
						} else {
 						 return;
								}
           
 	
    });
			 	


			 //pour obtenir plus d'info 
			$(document).on ("click", ".i", function () {

	  var id=this.parentNode.id;

	  	
	  	location.replace("infopaie.php?id="+id);


		

		});	

			
			//pour chercher 
			$(document).on ("click", "#find", function () {

				
				
           var d =document.querySelector("#debut").value;

           var f =document.querySelector("#fin").value; 
           if((d=="")||(f=="")){
           	alert("veuillez entrer la date");
           	return;
           }
            $(".don").load("paiement/searchpaiement.php",{
            	debut:d,
            	fin:f
            });
        });

			//pour obtenir plus d'info 
			$('.i').click(function()
{
    window.location.replace("info.php");
});
			



		

				

});




			 document.getElementById("add").addEventListener("click",function(){

			 	document.querySelector(".ajouter").style.visibility="visible";
			 })
			 document.getElementById("fermer").addEventListener("click",function(){
			 	document.querySelector(".ajouterf")[0].placeholder="CIN";
			 	document.querySelector(".ajouterf")[1].placeholder="montant";


			 	document.querySelector(".ajouter").style.visibility="hidden";
			 })
			new gnMenu( document.getElementById( 'gn-menu' ) );
		</script>
	</body>
</html>