<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
		<title>DrisPlay</title>
		<link rel="icon"  href="/static/Image/Logo_Drip.png " />   
		<link rel="stylesheet" href= "/static/StyleSheet/Site_Drip.css"  type="text/css" media="all" title="Site_Drip.css" />
		<link rel="stylesheet" href="/static/StyleSheet/Header.css"  type="text/css" media="all" title="Site_Drip.css" />
		<link rel="stylesheet" href="/static/StyleSheet/Bt.css"  type="text/css" media="all" title="Site_Drip.css" />
		<link rel="stylesheet" href="/static/StyleSheet/Bt_2.css"  type="text/css" media="all" title="Site_Drip.css" />
		<link rel="stylesheet" href="/static/StyleSheet/count_user.css"  type="text/css" media="all" title="Site_Drip.css" />		
	</head>

<body>
	<script src="/static/JS/app.js"></script>
    <?php
	if(isset($_SESSION['pseudo'])){
		echo"<h1 class='cot '>Bienvenue <span class='surlignage'>". $_SESSION['pseudo']."</span><br> Votre Email : <span class='surlignage'>". $_SESSION['email'] ."</span></h1>";

	}else{
		header('location : ../index.php');
	}?>
    <a href="/"><img src="/static/Image/Logo_Drip.png" alt="Image" class="align_img_center"  width=25%/> </a>
	<div style='margin: 0 auto; margin-top:10px; '>
	 <legend style="display:inline-block;">Ces pages sont des tests que j'ai produit dans le but de les présenter pour Parcoursup !</legend>
	<button type="button"  onclick="window.location.href='/user/logout.php';" name="submit"  style="font-size:80%; display:block; margin:0 auto; margin-top:10px;">Deconnexion</button>
	</div>
	



</body>
</html>


