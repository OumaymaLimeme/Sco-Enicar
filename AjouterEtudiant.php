<?php
   session_start();
   if($_SESSION["autoriser"]!="oui"){
      header("location:login.php");
      exit();
   }
   if(date("H")<18)
      $bienvenue="Bonjour et Bienvenue ".
      $_SESSION["prenomNom"].
      " dans votre espace personnel";
   else
      $bienvenue="Bonsoir et Bienvenue".
      $_SESSION["prenomNom"].
      "  dans votre espace personnel";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="icon" href="download.png" >
    <title>Ajouter Etudiant</title>
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
<div class="container">
    <img src="download.png" >
    <h3><?php echo $bienvenue?></h3> 
        <div class="title">Ajouter Etudiant</div>
        <form id="myForm" method="POST">
            <div class="user-details">
                <div class="input-box">
                    <span class="details"  >Nom</span>
                    <input type="text" id="nom" name="nom" placeholder="Entrer le Nom" required >
                </div>
                <div class="input-box">
                    <span class="details"  >Prénom</span>
                    <input  type="text" id="prenom" name="prenom" placeholder="Entrer le Prénom" required>
                </div>
                <div class="input-box">
                    <span class="details"  >Email</span>
                    <input  type="email" id="email" name="email" placeholder="Entrer L'Email" >
                </div>
                <div class="input-box">
                    <span class="details"  >CIN</span>
                    <input  type="number" id="cin" name="cin" placeholder="Entrer le CIN" >
                </div>
                <div class="input-box">
                    <span class="details"  >Adresse</span>
                    <input type="text" id="adresse" name="adresse" placeholder="Entrer l'adresse" >
                </div>
                <div class="input-box">
                    <span class="details"  >Classe </span>
                    <input  type="text" id="classe" name="classe"  placeholder="Entrer le classe de l'etudiant " >
                </div> 
               <div class="input-box">
                    <span class="details"  >Mot de passe</span>
                    <input type="password" id="pwd" name="pwd" placeholder="Entrer le  mot de passe" >
                </div>
               
               <div class="input-box">
                    <span class="details"  >Confirmer mot de passe</span>
                    <input  type="password" id="cpwd" name="cpwd" placeholder="confirmer le mot de pase" >
                </div>
            </div>
             
            <button type="button" onclick="ajouter()">Ajouter</button>
          
            
            
            <!-- Filter: https://css-tricks.com/gooey-effect/ -->
            <svg style="visibility: hidden; position: absolute;" width="0" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1">
                <defs>
                    <filter id="goo"><feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />    
                        <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
                        <feComposite in="SourceGraphic" in2="goo" operator="atop"/>
                    </filter>
                </defs>
            </svg>
            </form>
            </div>
            <ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>  
        </div>
       <div id="demo"></div>
<script>
    function ajouter()
    {
        var xmlhttp = new XMLHttpRequest();
        var url="http://localhost/dashboard/web/Ajouter.php";
        
        //Envoie Req
        xmlhttp.open("POST",url,true);

        form=document.getElementById("myForm");
        formdata=new FormData(form);

        xmlhttp.send(formdata);

        //Traiter Res

        xmlhttp.onreadystatechange=function()
            {   
                if(this.readyState==4 && this.status==200){
                // alert(this.responseText);
                    if(this.responseText=="OK")
                    {
                        document.getElementById("demo").innerHTML="L'ajout de l'étudiant a été bien effectué";
                        document.getElementById("demo").style.backgroundColor="white";
                    }
                    else
                    {
                        document.getElementById("demo").innerHTML="L'étudiant est déjà inscrit, merci de vérifier le CIN";
                        document.getElementById("demo").style.backgroundColor="#fba";
                    }
                }
            }
        
        
    }
    </script>
             
              
    
</body>
</html>