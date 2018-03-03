<!DOCTYPE html>
<html>
<head> 
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Moustapha Pene">

	<title>Annonce</title>

	 <link type="text/css" href="css/bootstrap.min.css" rel="stylesheet">

<link href="css/full-width-pics.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
	<header>
	<nav id="Menu" class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">My C@mpus</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul id="menu" class="navbar-nav ml-auto">
            <li class="nav-item ">
              <a class="nav-link" href="accueil.blade.php">Accueil
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="codification.php">Codification</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Restaurant</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="Annonce.php">Annonces</a>
              <ul>
              	<li><a href="#">Avis de pertes</a></li>
              	<li><a href="#">Avis de ventes</a></li>
              	<li><a href="#">Conference</a></li>
              	<li><a href="#">Recherche de colocataire</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
 </header >
 <br>
 <section>
<fieldset>
	<h6 > Veuillez  renseigner les informations suivantes</h6>
<form method="POST" action="traitement.php"  align="center" >
	<table background-color: gray;>
      <p>
      <tr><td><label for="identifiant">
      		Nom d'utilisateur
      	</label></td>
      	<td><input type="text" name="id" id="identifiant"/></td></tr>
      	<tr><td><label for="password">
      		Mot de passe
      	</label></td><td>
      	<input type="text" name="id" id="password"/></td></tr>
      </p>
 
		<br><br>
	
	<tr><td>Publier une annonce</td><td><input type="submit" name="creer" value="Enregistrer"></td></tr>
	</table>
</fieldset>
</section>
</form>
</body>
</html>