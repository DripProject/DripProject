
<!doctype html>
<html lang ="fr">
	<head>
		<meta charset="utf8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
		<title>DrisPlay</title>
		<link rel="icon"  href="/static/Image/Logo_Drip.png " />   
		<link rel="stylesheet" href= "/static/StyleSheet/Site_Drip.css"  type="text/css" media="all" title="Site_Drip.css" />
		<link rel="stylesheet" href="/static/StyleSheet/Header.css"  type="text/css" media="all" title="Site_Drip.css" />
		<link rel="stylesheet" href="/static/StyleSheet/Bt.css"  type="text/css" media="all" title="Site_Drip.css" />
		<link rel="stylesheet" href="/static/StyleSheet/Bt_2.css"  type="text/css" media="all" title="Site_Drip.css" />


	</head>

    <body class="adpat_connexion_background"> 
		<script src ="/static/JS/app.js" defer></script>
		<div class="header" >
			<a href="/"> <img src="/static/Image/Logo_Drip.png" class="Logo_Header_ Jstransit"  width=6.4%> </a>


		</div>
		
	<section class="Bloc_Bt bloc_connexion "> 
		<h1 class="bt_title Jstransit2">Connexion :</h1>
		<?php 
		extract($_POST);
		if(!empty($mail) && !empty($mdp)){
			?>
			<span class="Jstransit2"style="color:red; text-shadow: 1px 2px 9px red; ">Aie, une erreur est survenue, <br> Vous avez pas les droits pour vous connecter...<br>Ceci est un site 'test' pour parcoursup ! </span><?php
			
			
		}

		
		
		?>
		<form  method="post" id="assembleForm" novalidate>
		<div class="Jstransit2 margin_down">
		<label for="mail"  class="label_mail"  id="size-up">E-Mail</label>
		<input type="email" id="mail" name="mail" required placeholder="Identifiez vous inconnu !" class="size-up" oninvalid="return EmailInvalid();"/>
		<span class="mail_verif">(txt)</span>

		

		<label for="mdp" class="label_mail " id="size-up">Mot de passe  </label>
		<input type="password" id="mdp" name="mdp" required placeholder="Insérez votre mot de passe " class="size-up" oninvalid="return mdpVerif();"/>
		<span class="mdp_verif">(txt) </span>


		</div> 
		<script language="JavaScript">
			let assembleForm = document.getElementById("assembleForm");
			assembleForm.addEventListener("submit", (e)=>{
    			e.preventDefault();
    			let fields = document.querySelectorAll('input[required]');
    			let valid=true;
				fields.forEach((field)=>{
					if(! validateField(field)){
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
			var mail= document.getElementById("mail");

			var mail_verif= document.getElementsByClassName("mail_verif");
			var mdp_verif= document.getElementsByClassName("mdp_verif");

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
						mail_verif[0].innerHTML="L'email est invalide ! ";
						return false;
					}
				}
				if(EINone()==false || EIPb()==false){
					
					return false;
				}
				return false;
				
				
				}
				function mdpVerif(){
					if(mdp.value==""){
						mdp_verif[0].style.visibility=("visible");
						mdp_verif[0].innerHTML="Le mot de passe je vous prie ?"				
						return false;
		
					}
					/*mdp_verif[0].style.visibility=("visible");
					mdp_verif[0].innerHTML="Mot de passe incorrect <br> veuillez réessayer";*/
					return false;
					
		
				}

			


	
		</script>
		
		<input type="submit" id="send" name="send" value="Valider →"  class="send Inscription Jstransit"  />
		<button type="button" onclick="window.location.href='/';" class="Inscription Jstransit" id="back">←Retour </button> 

		</form>
		
		
		
		</section>
	
		
	</body>

	</html>