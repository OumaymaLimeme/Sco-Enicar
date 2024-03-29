<?php
   session_start();
   @$nom=$_POST["nom"];
   @$prenom=$_POST["prenom"];
   @$cin=$_POST["cin"];
   @$classe=$_POST["classe"];
   @$valider=$_POST["valider"];
   $erreur="";
   if(isset($valider)){
      if(empty($nom)) $erreur="Nom laissé vide!";
      elseif(empty($prenom)) $erreur="Prénom laissé vide!";
      elseif(empty($cin)) $erreur="cin laissé vide!";
      elseif(empty($classe)) $erreur="classe laissé vide!";
      else{
         include("connexion.php");
         $sel=$pdo->prepare("DELETE FROM etudiant WHERE cin = :cin");
         $name = '111';
         $sel->bindValue(':cin', $cin);
         $sel->execute(); 
      }
   }
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
    <title>Supprimer Etudiant</title>
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
    <div class="container">
    <img src="download.png" >
        <div class="title">Supprimer Etudiant</div>
        <form id="myForm" method="POST">
            <div class="user-details">
                <div class="input-box">
                    <span class="details"  >Nom</span>
                    <input   type="text" id="nom" name="nom" placeholder="Entrer le Nom "  >
                </div>
                <div class="input-box">
                    <span class="details"  >Prénom</span>
                    <input type="text" id="prenom" name="prenom"  placeholder="Entrer le Prénom  " >
                </div>
                <div class="input-box">
                    <span class="details"  >Classe</span>
                    <input   type="text" id="classe" name="classe" placeholder="Entrer La classe  " >
                </div>
                <div class="input-box">
                    <span class="details"  >CIN</span>
                    <input  type="number" id="cin" name="cin" placeholder="Entrer le CIN " >
                </div>
                <input type="submit" name="valider" value="Supprimer">
          <!--   <button type="button" onclick="supprimer()">Supprimer</button>-->
                        
            <!-- Filter: https://css-tricks.com/gooey-effect/ -->
            <svg style="visibility: hidden; position: absolute;" width="0" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1">
                <defs>
                    <filter id="goo"><feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />    
                        <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
                        <feComposite in="SourceGraphic" in2="goo" operator="atop"/>
                    </filter>
                </defs>
            </svg>
            
            
        </div>
        
            </form>
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


    
</body>
</html>