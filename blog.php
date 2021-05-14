<?php
   session_start();
   if($_SESSION["autoriser"]!="oui"){
      header("location:blog.php");
      exit();
   }
   if(date("H")<18)
      $bienvenue="Bonjour et bienvenue ".
      $_SESSION["prenomNom"].
      " dans votre espace personnel";
   else
      $bienvenue="Bonsoir et bienvenue ".
      $_SESSION["prenomNom"].
      " dans votre espace personnel";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog de fleurs</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> <!-- lien bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> <!-- lien bootstrap pour log in et sign in-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head> 
<body onload="document.fo.login.focus()">
    <div id="flower"></div>
    
    <h1>Ma collection de fleurs</h1>
            <h2 id="hello"><?php echo $bienvenue?></h2>
             <a id="bye" href="deconnexion.php">[Se déconnecter]</a> 
    <audio controls>
        <source src="la fleur au 7 couleurs.mp3" type="audio/mpeg">
    </audio>

    <script
        src="script.js"> 
    </script> 

    <!-- Bootstrap CSS -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navigation</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        
        <form class="d-flex">
          <input class="form control me-2" type="text" name="search" value="" id="myinput" onkeyup="searchFunction()" placeholder="Rechercher une fleur" arialabel="Search">
          <button class="btn btn-outline-success" type="submit">Rechercher</button>
        </form>
      </div>
        <ul class="nav navbar-nav navbar-right">
          <form action="inscription.php">
          <li><button style ="color: #058EF3 ; background-color: #343A40; border: hidden" href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</li>
          </form>
          <form action="login.php">
            <li><button style ="color: #058EF3 ; background-color: #343A40; border: hidden" href="#"><span class="glyphicon glyphicon-log-in"></span> Login</li>
          </form>
        </ul>
      </div>
    </nav>
  <!-- Bootstrap CSS -->
  
  <!-- Image de fleur -->
  
  <ul id="wrapper">
    <li id="wrap">
        <img src="anemone.png">
        <ul>
            <a href="#">Anémone</a>
        </ul>
    </li>
    <li id="wrap">
        <img src="aster.png">
        <ul>
          <a href="#">Aster</a>
        </ul>
    </li>
    <li id="wrap">
      <img src="tournesol.png">
      <ul>
        <a href="#">Tournesol</a>
      </ul>
    </li>
    <li id="wrap">
      <img src="myosotis.png">
      <ul>
        <a href="#">Myosotis</a>
      </ul>
    </li>
    <li id="wrap">
      <img src="hibiscus.png">
      <ul>
        <a href="#">Hibiscus</a>
      </ul>
    </li>
    <li id="wrap">
      <img src="calibrachoa.png">
      <ul>
        <a href="#">Calibrachoa</a>
      </ul>
    </li>
    <li id="wrap">
      <img src="frangipanier.png">
      <ul>
        <a href="#">Frangipanier</a>
      </ul>
    </li>
  </ul>
<!-- Image de fleur -->
  
</body>
</html>