<!DOCTYPE html>
<html>
<head>
	<title>Adresse Client</title>
	<Meta charset="utf-8"/>
</head>
<body>
<h1 style="..."> Veuillez  renseigner les informations suivantes</h1>
<form method="POST" action="traitement.php" style="..." align="center" >
	<fieldset align="center">
		<legend align="center">Vos informations</legend>
		<p><label for="id" >Id:</label><input type="text" name="id" id="id" ></input>
        <p><label for="prenom">Prenom:</label><input type="text" name="prenom" id="prenom" ></input>
        <p><label for="nom">Nom:</label><input type="text" name="nom" id="nom" ></input>
  <p><label for="ville">Ville:</label><input type="text" name="ville" id="ville" ></input>
 <p><label for="adresse">Adresse:</label><input type="text" name="adresse" id="adresse" ></input>
 <p><label for="code">Code Postal:</label><input type="text" name="code" id="code"></input>
<input type="submit" name="creer" value="Enregistrer">

	</fieldset>

</form>
</body>
</html>