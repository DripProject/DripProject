<!doctype html>
<html lang ="fr">
	<head>
		<meta charset="utf8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />

		<title>DrisPlay</title>
		<link rel="icon"  href="/static/Image/Logo_Drip.png " />   
		<link rel="stylesheet" href= "/static/StyleSheet/Site_Drip.css"  type="text/css" media="all" title="Site_Drip.css" />
		<link rel="stylesheet" href="/static/StyleSheet/Header.css"   type="text/css" media="all"  title="Site_Drip.css" />
		<link rel="stylesheet" href="/static/StyleSheet/Bt.css"   type="text/css" media="all" title="Site_Drip.css" />
	</head>

    <body class="adapt_background_inscription">
		<script src="/static/JS/JQuery.js"></script>
		<script src ="/static/JS/app.js" defer></script>
		<div class="header" >
			<a href="/"> <img src="/static/Image/Logo_Drip.png" class="Logo_Header_ Jstransit"  width=6.4%> </a>


		</div>
		<section class="Bloc_Bt"> 
		<h1 class="bt_title Jstransit2">Inscription :</h1>
		<?php 
			
 
		
		
			extract($_POST);
			if(! empty($mdp) && !empty($mail) && !empty($pseudo)){
				if($mdp == $Cmdp){
					session_start();
					$_SESSION['pseudo'] = $pseudo;
					$_SESSION['email'] = $mail;
					header('location:../user/connexion_succes.php');
			

				
				
				
				
			}}
		
		?>
		
		<form  method="post" id="assembleForm" class="Jstransit2"novalidate  >
		<label for="mail" class="label_mail">E-Mail (ex:you@gmail.com)</label>
		<input type="email" id="mail" name="mail" placeholder=" Insérez votre E-mail"  oninvalid="return EmailInvalid();" required/>
		<span class="mail_verif">(txt)</span>
		
		

		<label for="pseudo" class="label_mail">Pseudonyme (ex: Dark75)</label>
		<input type="text" id="pseudo" name="pseudo" placeholder=" Ajoutez un pseudo !" oninvalid="return pseudoVerif();" pattern="^[a-zA-Z0-9-_]+$" minlength="5" maxlength="15"  required/> 
		<span class="pseudo_verif">(txt)</span>
		

		<label for="mdp" class="label_mail">Mot de passe  </label>
		<input type="password" id="mdp" name="mdp" placeholder=" Pour un peu de sécurité un mot de passe ?" oninvalid="return mdpVerif();" minlength="8" required />
		<span class="mdp_verif">(txt) </span>
		
		<label for="Cmdp" class="label_mail">Mot de passe (confirmation) </label> 
		<input type="password" id="Cmdp" name="Cmdp" placeholder=" Confirmez le et c'est fini !" oninvalid="return cmdpVerif();"  required/>
		<span class="cmdp_verif">(txt)</span>

		<!---- Mettre connexion auto avec google et facebook  --> 
		
		<script language="JavaScript" >
			let assembleForm = document.getElementById("assembleForm");
			assembleForm.addEventListener("submit", (e)=>{
    			e.preventDefault();
    			let fields = document.querySelectorAll('input[required]');
    			let valid=true;
				fields.forEach((field)=>{
					if(! validateField(field)){
						valid=false;
						
						
						
						}
					if (mdpvalid()==false){
						valid=false;
					

					}
				});
				if(valid){
					e.target.submit();
				}
				

				
			}, false);
			
			function validateField(field){
				if(field.checkValidity()){
					return true;}
				else{
					return false
				}
				
			}
			

			



		
		var mdp= document.getElementById("mdp");
		var cmdp= document.getElementById("Cmdp");
		var mdp_verif= document.getElementsByClassName("mdp_verif");
		var cmdp_verif= document.getElementsByClassName("cmdp_verif");
		
		
		
		function mdpvalid() {
			if(cmdp.value != mdp.value){
				cmdp_verif[0].style.visibility=("visible");
				cmdp_verif[0].innerHTML="Confirmation incorrect, <br> verifiez l'orthographe !"
				
				return false;
				
			}
		}
		
		

		
						
		
		function EmailInvalid(){
			
			function EINone(){
				var mail= document.getElementById("mail");
				var mail_verif= document.getElementsByClassName("mail_verif");
				if(mail.value==""){
					mail_verif[0].style.visibility=("visible");
					mail_verif[0].innerHTML="N'oubliez surtout pas l'Email !";
					return false;
				}
			}
			
			function EIPb(){
				var mail= document.getElementById("mail");
				var mail_verif= document.getElementsByClassName("mail_verif");
				if(mail.validity.typeMismatch){
					mail_verif[0].style.visibility=("visible");
					mail_verif[0].innerHTML="Cet Email est incorrect. Verifiez l'orthographe !";
					return false;
				}
			}
			if(EINone()==false || EIPb()==false){
				
				return false;
			}
			return false;
			
			
			}
			
			function Valid(){
				var mail= document.getElementById("mail");
				var mail_verif= document.getElementsByClassName("mail_verif");
				var pseudo= document.getElementById("pseudo");
				var pseudo_verif= document.getElementsByClassName("pseudo_verif");
				if(! EmailInvalid()){
					mail_verif[0].style.visibility=("visible");
					mail_verif[0].innerHTML="";
				}
				

				if(! pseudoVerif()){
					pseudo_verif[0].style.visibility=("visible");
					pseudo_verif[0].innerHTML="";
				}
				if(! mdpVerif()){
					mdp_verif[0].style.visibility=("visible");
					mdp_verif[0].innerHTML="";

				}
				if(! cmdpVerif()){
					cmdp_verif[0].style.visibility=("visible");
					cmdp_verif[0].innerHTML=""; 


				}
				
				
				
				
				
				
				
				
			}




		function pseudoVerif(){
			var pseudo= document.getElementById("pseudo");
			var pseudo_verif= document.getElementsByClassName("pseudo_verif");
			if(pseudo.value==""){
				pseudo_verif[0].style.visibility=("visible");
				pseudo_verif[0].innerHTML="Vous avez oublié votre pseudo ?!"
				
				return false;
			}
			
			pseudo_verif[0].style.visibility=("visible");
			pseudo_verif[0].innerHTML="Le pseudo doit être <br> entre 5 et 15 caractères ! <br>(sans espace...) ";
			return false;

			
			
			
			
			
			
			
				
			
			

		}
		
		function mdpVerif(){
			if(mdp.value==""){
				mdp_verif[0].style.visibility=("visible");
				mdp_verif[0].innerHTML="Le mot de passe peut être ?"				
				return false;

			}
			
			
			
			mdp_verif[0].style.visibility=("visible");
			mdp_verif[0].innerHTML="Le mot de passe doit être <br> d'au moins 8 caractères !  ";
			return false;
			

		}
		
		
		function cmdpVerif(){
			if(cmdp.value==""){
				cmdp_verif[0].style.visibility=("visible");
				cmdp_verif[0].innerHTML="Oubliez pas de confirmer !"
				return false;

			}
			return false;
			
			
			
			
			
			}
		
			
		</script>
		
		
		
		<div class="align contour-checkbox Jstransit">
			<a href="/" target="blank_" class="lien_newpage" ><p class="sous_texte">Confidentialité</p> </a>
		 
		<input type="checkbox" id="confidentiality" class="confidentiality" name="confidentiality" required/>
		<label for="confidentiality" id="confidentiality"> </label> 
		
		</div>
		

		<input type="submit" name="publi" id="send" value="S'Inscrire"  onclick="return Valid() ;"   class="send Inscription Jstransit inline"  /> 
		<button type="button" onclick="window.location.href='/';" class="Inscription Jstransit inline" id="back" >← Retour </button>
		</form>
		
		
		
		

		 

		
		
		</section>
	
		
	</body>

	</html>