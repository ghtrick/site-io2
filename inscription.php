<?php
include_once("connexionmysql.php");

$conn=connexion();
$aaa = $_POST[nom];
$bbb = $_POST[mdp];

$res = mysqli_query($conn,"SELECT * FROM utilisateur WHERE nom = '$aaa'");
if (mysqli_num_rows($res)==1) {
  echo "nom d'utilisateur déjà existant, veuillez en choisir un autre";

} else {
$instruction = "INSERT INTO utilisateur(nom, motdepasse) VALUES ('$aaa', '$bbb')";

if (mysqli_query($conn,$instruction)) echo "compte créé";
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
     <p>veuillez retourner à l'accueil en cliquant <br><a href=accueil.html>ici</a></p>
  </body>
</html>
