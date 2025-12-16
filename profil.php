<!DOCTYPE html>
<?php session_start(); 
include 'connexion.php';


?>
<html lang="en" class="no-js">
	<head>
		<meta http-equiv="Content-type" content="text/html;charset=iso-8859-15"/>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>profil</title>
		<meta name="description" content="A sidebar menu as seen on the Google Nexus 7 website" />
		<meta name="keywords" content="google nexus 7 menu, css transitions, sidebar, side menu, slide out menu" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
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
	
	background-image: url("css/back.jpg");
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
	    text-decoration: none;
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
	    text-decoration: none;
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
		background-image: url("css/back.jpg");
		background: white;
		color: #5f6f81;
		list-style: none;
		text-transform: none;
		font-weight: 300;
		font-family: 'Lato', Arial, sans-serif;
		line-height: 60px;
		    z-index: 1;
}

.gn-menu-main {
		position: fixed;
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
		    text-decoration: none;
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
    width: 500px;
    height: 360px;
    border-radius: 4px;
    margin-left: 400px;
    position: relative;
    bottom: 250px;
}

input.hidden {
    position: absolute;
    left: -9999px;
}

#profile-image1 {
    cursor: pointer;
  
     width: 100px;
    height: 100px;
	border:2px solid #76a7f1 ;}
	.tital{ font-size:16px; font-weight:500;}
	 .bot-border{ border-bottom:1px #f8f8f8 solid;  margin:5px 0  5px 0}
	 input {
    display: block;
    outline: none;
    border: none !important;
}
 input[type="submit"] {
    margin-top: 10px;
    margin-left: 120px;
    background-color: #76a7f1;
    color: white;
    box-shadow: 0 0 4px black;
    padding: 6px;
    width: 200px;
    position: relative;
    left: 300px;
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
			</header> 
		</div><!-- /container -->
		<script src="js/classie.js"></script>
		<script src="js/gnmenu.js"></script>
		<script>
			 
			new gnMenu( document.getElementById( 'gn-menu' ) );
		</script>

       <div class="contenu">
					<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
					<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
					<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
					<?php 
					$id=$_SESSION["id_u"];
					$sql="SELECT * FROM user WHERE id_u=$id;";
					$resultat=mysqli_query($conn,$sql);
					while ($r=mysqli_fetch_assoc($resultat)) {
						$id_s=$r["id_s"];
						$nom=$r["nom"];
						$prenom=$r["prenom"];
						$username=$r["username"];
						$password=$r["password"];
						$tel=$r["tel"];
					}
					$sql="SELECT * FROM specialite WHERE id_s=$id_s;";
					$resultat=mysqli_query($conn,$sql);
					while ($r=mysqli_fetch_assoc($resultat)) {
						$libelle=$r["libelle"];
						
					}









					 ?>
		<div class="container">
			<div class="row">
		        
		        
		       <div class="col-md-7 ">

		<div class="panel panel-default">
		  <div class="panel-heading">  <h4 >profil d'utilisateur</h4></div>
		   <div class="panel-body">
		       
		    <div class="box box-info">
		        
		            <div class="box-body">
		                     <div class="col-sm-6">
		                     <div  align="center"> <img alt="User Pic" src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg" id="profile-image1" class="img-circle img-responsive"> 
		                
		                <input id="profile-image-upload" class="hidden" type="file">
		<div style="color:#999;" ><?php echo utf8_encode($libelle); ?></div>
		                <!--Upload Image Js And Css-->
		           
		                     </div>
		              
		              <br>
		    
		              <!-- /input-group -->
		            </div>
		            <div class="col-sm-6">
		            <h4 style="color:#76a7f1;">CABINET MEDICAL </h4></span>
		            </div>
		            <div class="clearfix"></div>
		            <hr style="margin:5px 0 5px 0;">
		    
		              
		<div class="col-sm-5 col-xs-6 tital ">Nom:</div><div class="col-sm-7 col-xs-6"><input type="text" name="" value="<?php echo $nom; ?>"></div>
		     <div class="clearfix"></div>
		<div class="bot-border"></div>

		<div class="col-sm-5 col-xs-6 tital " >Prénom:</div><div class="col-sm-7"><input type="text" name="" value="<?php echo $prenom; ?>"></div>
		  <div class="clearfix"></div>
		<div class="bot-border"></div>


		<div class="col-sm-5 col-xs-6 tital " >Username:</div><div class="col-sm-7"><input type="text" name="" value="<?php echo $username; ?>"></div>

		 <div class="clearfix"></div>
		<div class="bot-border"></div>

		<div class="col-sm-5 col-xs-6 tital " >Password:</div><div class="col-sm-7"><input type="text" name="" value="<?php echo $password; ?>"></div>

		 <div class="clearfix"></div>
		<div class="bot-border"></div>

		<div class="col-sm-5 col-xs-6 tital " >Tél:</div><div class="col-sm-7"><form action="logout.php" method="POST"><input type="text" name="" value="<?php echo $tel; ?>"></div>
		<input type="submit" name="ok" value="Déconnexion"></form>


		            <!-- /.box-body -->
		          </div>
		          <!-- /.box -->

		        </div>
		       
		            
		    </div> 
		    </div>
		</div>  
		    <script>
		              $(function() {
		    $('#profile-image1').on('click', function() {
		        $('#profile-image-upload').click();
		    });
		});       
		              </script> 		       
		       
		   </div>
		</div>

						</div>








	</body>
</html>