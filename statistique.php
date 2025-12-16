<!DOCTYPE html>
<?php session_start();
include 'connexion.php';
 ?>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>statistique</title>
		<meta name="description" content="A sidebar menu as seen on the Google Nexus 7 website" />
		<meta name="keywords" content="google nexus 7 menu, css transitions, sidebar, side menu, slide out menu" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<script src="js/modernizr.custom.js"></script>
				 <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="Chart.js-2.8.0\dist\Chart.js"></script>
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
	background-color: #c9cfdc;
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
		    z-index: 1;
		top: 0;
		left: 0;
		width: 100%;
		height: 60px;
		font-size: 13px;
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
.contenu {
	    display: flex;
    position: absolute;
    margin-top: -350px;
    margin-left: 250px;
    z-index: auto;
        flex-wrap: wrap;
}
.un {
	display: table-cell;
    background-color: white;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    border-radius: 5px;
        padding: 15px;
            margin-right: 20px;

     margin-bottom: 20px;

}
.deux {
	display: table-cell;
		background-color: white;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    border-radius: 5px;
        padding: 15px;
        margin-bottom: 20px;
}
.trois {
	display: table-cell;
    background-color: white;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    border-radius: 5px;
        padding: 15px;
            margin-right: 20px;

}
.quatre {
	display: table-cell;
		background-color: white;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    border-radius: 5px;
        padding: 15px;
}
.cinq {
	display: table-cell;
		background-color: white;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    border-radius: 5px;
        padding: 15px;
            margin-top: 20px;
    margin-bottom: 20px;
}
.six {
	display: table-cell;
		background-color: white;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    border-radius: 5px;
        padding: 15px;
        margin-bottom: 20px;
}

h2{
	 font-family: "Times New Roman", Times, serif;
	     text-align: center;
    color: #1a5782;
}


.sept {
	display: table-cell;
		background-color: white;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    border-radius: 5px;
        padding: 15px;
        margin-bottom: 20px;
}
.huit {
	display: table-cell;
		background-color: white;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    border-radius: 5px;
        padding: 15px;
}







		</style>

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

			<header>
				<h1>Bienvenue ! <span> </span></h1>	
			</header> 
		</div><!-- /container -->
		<div class="contenu">
			<?php 
			$sql2="SELECT type,count(id_c) AS nb FROM consultation GROUP BY type;";
$resultat=mysqli_query($conn,$sql2);
$nombre = array();
$type = array("controle","consultation");
while ($ligne=mysqli_fetch_assoc($resultat)) {

    $nombre[] =$ligne['nb'];
   
}

$sql2="SELECT sexe,count(id_pat) AS nb FROM patient GROUP BY sexe;";
$resultat=mysqli_query($conn,$sql2);
$nombre2 = array();
$type2 = array("femme","homme");
while ($ligne=mysqli_fetch_assoc($resultat)) {

    $nombre2[] =$ligne['nb'];
   
}




$sql3="SELECT count(id_pat) AS nb FROM patient GROUP BY id_n;";
$resultat=mysqli_query($conn,$sql3);
$nombre3 = array();
$type3 = array("maroc","france","algerie","tunisie");
while ($ligne=mysqli_fetch_assoc($resultat)) {

    $nombre3[] =$ligne['nb'];
   
}

$sql4="SELECT user.nom ,count(id_pat) AS nb FROM rendez_vous,user WHERE rendez_vous.id_u=user.id_u GROUP BY rendez_vous.id_u;";

$resultat=mysqli_query($conn,$sql4);
$nombre4 = array();
$type4 = array();
while ($ligne=mysqli_fetch_assoc($resultat)) {

    $nombre4[] =$ligne['nb'];
   $type4[]=$ligne['nom'];
}


$sql5="SELECT month(date_r) AS m ,count(id_pat) AS nb FROM rendez_vous  GROUP BY month(date_r);";

$resultat=mysqli_query($conn,$sql5);
$nombre5 = array();
$mois = array("1"=>"janvier","2"=>"février","3"=>"mars","4"=>"avril","5"=>"mai","6"=>"juin","7"=>"juillet","8"=>'aout',"9"=>"septembre","10"=>"octobre","11"=>"novembre","12"=>"décembre");
$type5 = array("janvier","février","mars","avril","mai","juin","juillet",'aout',"septembre","octobre","novembre","décembre");
$vraim=array();$vraim2=array();

while ($ligne=mysqli_fetch_assoc($resultat)) {
   
    $nombre5[] =$ligne['nb'];
    //obtenir les noms des mois
    $vraim[]=$mois[$ligne['m']];

}
$start=0;
for ($i=0; $i <12; $i++) { 
	
	$flag=0;
	for ($j=$start; $j <count($vraim) ; $j++) { 
		
		if($type5[$i]==$vraim[$j]){
			$vraim2[]=$nombre5[$j];
			$flag=1;
			$start=++$j;

		}else{
			if($flag==0){
			$vraim2[]=0;
			$flag=1;
		}

		}
	}
	
	
	

}

for ($i=$start; $i < 12 ; $i++) { 
	$vraim2[]=0;
}



$sql6="SELECT month(date_p) AS m ,sum(montant) AS nb FROM paiement  GROUP BY month(date_p) ;";

$resultat=mysqli_query($conn,$sql6);
$nombre6 = array();
$vraim3=array();$vraim4=array();
$moyenne1=0;
while ($ligne=mysqli_fetch_assoc($resultat)) {
    $nombre6[] =$ligne['nb'];
    //obtenir les noms des mois
    $vraim3[]=$mois[$ligne['m']];
    $moyenne1+=$ligne['nb'];
}
$moyenne1=$moyenne1/12;
$variance=0;
$start=0;
for ($i=0; $i <12; $i++) { 
	
	$flag=0;
	if($start<count($vraim3)){
	for ($j=$start; $j <count($vraim3) ; $j++) { 
		
		if($type5[$i]==$vraim3[$j]){
			$vraim4[]=$nombre6[$j];
			$flag=1;
			$start=$j+1;
			$variance=$variance+(pow(($nombre6[$j]-$moyenne1),2));

		}else{
			if($flag==0){
			$vraim4[]=0;
			$flag=1;
		}

		}
	}}
	
	
	

}
$variance=$variance/12;

for ($i=$start; $i < 12 ; $i++) { 
	$vraim4[]=0;
}

/*................................................tranche*/

$tranches = array("1-10","10-20","20-40","40-60","60 au plus");
$nombre9=array();
$tranche1=array();
$tranche2=array();
$tranche3=array();
$tranche4=array();
$tranche5=array();

$sql7=" SELECT 2020-year(date_naissance) AS age FROM patient
;";
$resultat=mysqli_query($conn,$sql7);

while ($ligne=mysqli_fetch_assoc($resultat)) {

    $nombre9[] =$ligne['age'];
   
}
for ($i=0; $i <count($nombre9) ; $i++) { 
	
if($nombre9[$i]<10){
 $tranche1[] =1;
}elseif ($nombre9[$i]<20) {
	 $tranche2[] =1;
}elseif ($nombre9[$i]<40) {
	 $tranche3[] =1;
}elseif ($nombre9[$i]<60) {
	 $tranche4[] =1;
}else {
	 $tranche5[] =1;
}

}

$nbretranche=array(count($tranche1),count($tranche2),count($tranche3),count($tranche4),count($tranche5));



//pour les consultations ................................................................



$sql8=" SELECT  month(date_r) AS m,count(id_r) AS nbre FROM rendez_vous GROUP BY month(date_r)
;";
$resultat=mysqli_query($conn,$sql8);
$moyenne2=0;
while ($ligne=mysqli_fetch_assoc($resultat)) {
	$moyenne2+=$ligne['nbre'];

    $nombrecons[] =$ligne['nbre'];
     //obtenir les noms des mois
    $moiscons[]=$mois[$ligne['m']];
   
}
$moyenne2=$moyenne2/12;
$variance1=0;
$start=0;
for ($i=0; $i <12; $i++) { 
	
	$flag=0;
	if($start<count($moiscons)){
	for ($j=$start; $j <count($moiscons) ; $j++) { 
		
		if($type5[$i]==$moiscons[$j]){
			$nombrecons1[]=$nombrecons[$j];
			$flag=1;
			$start=$j+1;
			$variance1=$variance1+(pow(($nombrecons[$j]-$moyenne2),2));

		}else{
			if($flag==0){
			$nombrecons1[]=0;
			$flag=1;
		}

		}
	}}
	
	
	

}
$variance1=$variance1/12;
for ($i=$start; $i < 12 ; $i++) { 
	$nombrecons1[]=0;
}



//nbre analyse par mois ..............................................................;



$sql9=" SELECT  month(date_a) AS m,count(id_ana) AS nbre FROM patient_analyse GROUP BY month(date_a)
;";
$resultat=mysqli_query($conn,$sql9);

while ($ligne=mysqli_fetch_assoc($resultat)) {

    $nombreana[] =$ligne['nbre'];
     //obtenir les noms des mois
    $moisana[]=$mois[$ligne['m']];
   
}

$start=0;
for ($i=0; $i <12; $i++) { 
	
	$flag=0;
	if($start<count($moisana)){
	for ($j=$start; $j <count($moisana) ; $j++) { 
		
		if($type5[$i]==$moiscons[$j]){
			$nombreana1[]=$nombreana[$j];
			$flag=1;
			$start=$j+1;

		}else{
			if($flag==0){
			$nombreana1[]=0;
			$flag=1;
		}

		}
	}}
	
	
	

}

for ($i=$start; $i < 12 ; $i++) { 
	$nombreana1[]=0;
}














			 ?>
			<table>
				<tr>
			<div class="un">
				<h2>visites par type</h2>
				  <canvas id="myChart1" width="400" height="300" ></canvas></div>

			</div>

<div class="deux">
		<h2>nombre de patients par sexe</h2>
				  <canvas id="myChart2" width="400" height="300" ></canvas></div>
				
			</div></tr>
			<div class="trois">
				<h2>nombre de patients par nationalité</h2>
				<canvas id="myChart3" width="400" height="300" ></canvas></div>
			</div>
			<div class="quatre">
				<h2>nombre de patients par médecin</h2>
				<canvas id="myChart4" width="400" height="300" ></canvas></div>
			</div>
			<div class="cinq">
				<h2> Nombre de Consultations par mois</h2>
				<canvas id="myChart5" width="850" height="300" ></canvas><p>la moyenne : <?php echo round($moyenne2,2); ?></p><p>la variance : <?php echo round($variance1,2); ?> </p></div>
			</div>
			<div class="six">
				<h2>profit par mois</h2>
				<canvas id="myChart6" width="850" height="300" ></canvas><p>la moyenne : <?php echo round($moyenne1,2); ?> DH</p><p>la variance : <?php echo round($variance,2); ?></p></div>

			</div>
			<div class="sept">
				<h2>nombre de patients par tranche d'age</h2>
				<canvas id="myChart7" width="850" height="300" ></canvas></div>
			</div>
			<div class="huit">
				<h2>nombre de consultations et d'analyses</h2>
				<canvas id="myChart8" width="850" height="300" ></canvas></div>
			</div>


</table>




















		</div>

		<script src="js/classie.js"></script>
		<script src="js/gnmenu.js"></script>

		
		<script type="text/javascript" >
						new gnMenu( document.getElementById( 'gn-menu' ) );



	//;;;;;;;;;;;;;;;;;;;;;;par type.....................................................


  var ctx = document.getElementById('myChart1').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'pie',

    // The data for our dataset
    data: {
        labels: <?=json_encode($type);?>,
        datasets: [{
            // label: 'visites',
           responsive : true,
           backgroundColor: ["#49c391",
                "#5fd0dc"],
            // borderColor: 'rgb(51, 102, 204)',
            data: <?=json_encode($nombre);?>
        }]
    },

    // Configuration options go here
  
});



//............................par sexe..........................................



 var ctx2 = document.getElementById('myChart2').getContext('2d');
var chart2 = new Chart(ctx2, {
    // The type of chart we want to create
    type: 'pie',

    // The data for our dataset
    data: {
        labels: <?=json_encode($type2);?>,
        datasets: [{
            // label: 'visites',
           responsive : true,
           backgroundColor: ["#f584c2",
                "#6b9be2"],
            // borderColor: 'rgb(51, 102, 204)',
            data: <?=json_encode($nombre2);?>
        }]
    },

    // Configuration options go here
  
});




//.............................;nationalite....................................


var ctx3 = document.getElementById('myChart3').getContext('2d');
var chart3 = new Chart(ctx3, {
    // The type of chart we want to create
    type: 'pie',

    // The data for our dataset
    data: {
        labels: <?=json_encode($type3);?>,
        datasets: [{
            // label: 'visites',
           responsive : true,
           backgroundColor: ["#e6f568",
                "#f59668","#57d86c","#ffa12d"],
            // borderColor: 'rgb(51, 102, 204)',
            data: <?=json_encode($nombre3);?>
        }]
    },

    // Configuration options go here
  
});


//..............................par medecin................................;;



var ctx4 = document.getElementById('myChart4').getContext('2d');
var chart4 = new Chart(ctx4, {
    // The type of chart we want to create
    type: 'bar',

    // The data for our dataset
    data: {
        labels: <?=json_encode($type4);?>,
        datasets: [{
             label: 'nbre visites',
           responsive : true,
           backgroundColor: "#9c78d6",
                
            // borderColor: 'rgb(51, 102, 204)',
            data: <?=json_encode($nombre4);?>
        }]
    },

    // Configuration options go here
  options: {
    scales: {
        yAxes: [{
            ticks: {
                beginAtZero: true
            }
        }]
    }
}
});



//.;;;;;;;;;;;;;;;;;;;;;;;par mois...................................;




var ctx5 = document.getElementById('myChart5').getContext('2d');
var chart5 = new Chart(ctx5, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
        labels: <?=json_encode($type5);?>,
        datasets: [{
             label: 'nbre consultations',
           responsive : true,
           // backgroundColor: "#9c78d6",
                
            borderColor: '#9c78d6',
            data: <?=json_encode($vraim2);?>
        }]
    },

    // Configuration options go here
  options: {
    scales: {
        yAxes: [{
            ticks: {
                beginAtZero: true
            }
        }]
    }
}
});






//.............................PROFIT......................................




var ctx6 = document.getElementById('myChart6').getContext('2d');
var chart6 = new Chart(ctx6, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
        labels: <?=json_encode($type5);?>,
        datasets: [{
             label: 'Montant en DH',
           responsive : true,
           // backgroundColor: "#9c78d6",
                
            borderColor: '#78bf43',
            data: <?=json_encode($vraim4);?>
        }]
    },

    // Configuration options go here
  options: {
    scales: {
        yAxes: [{
            ticks: {
                beginAtZero: true
            }
        }]
    }
}
});
//..............................par tranche d'age................................;;



var ctx7 = document.getElementById('myChart7').getContext('2d');
var chart7 = new Chart(ctx7, {
    // The type of chart we want to create
    type: 'bar',

    // The data for our dataset
    data: {
        labels: <?=json_encode($tranches);?>,
        datasets: [{
             label: 'nbre patients',
           responsive : true,
           backgroundColor: "#1f8792",
                
            // borderColor: 'rgb(51, 102, 204)',
            data: <?=json_encode($nbretranche);?>
        }]
    },

    // Configuration options go here
  options: {
    scales: {
        yAxes: [{
            ticks: {
                beginAtZero: true
            }
        }]
    }
}
});

//...........................2axes
 var ctx8 = document.getElementById('myChart8').getContext('2d');

var chart8 =new Chart(ctx8, {
  type: 'line',
  data: {
    labels:<?=json_encode($type5);?>,
    datasets: [{
      label: 'consultations',
       responsive : true,
        borderColor: '#9d8cf7',
      
      yAxisID: 'A',
      data: <?=json_encode($nombrecons1);?>
    }, {
      label: 'analyses',
      borderColor: '#bb4b4b',
      yAxisID: 'B',
      data:<?=json_encode($nombreana1);?>
    }]
  },
  options: {
    scales: {
      yAxes: [{
        id: 'A',
        type: 'linear',
        position: 'left',
      }, {
        id: 'B',
        type: 'linear',
        position: 'right',
       
      }]
    }
  }
});































</script>















	</body>
</html>