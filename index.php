
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Vap Factory</title>
</head>
<body>


<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'brief.php';
require 'tableau.php';
require 'formulaire.php';

// je recupere mes donnees en post 
if (isset($_POST['reference'])) {
    $reference = $_POST ['reference'];
    $nom = $_POST ['nom'];
    $description = $_POST ['description'];
    $prix_achat = $_POST ['prix_achat'];
    $prix_vente = $_POST ["prix_vente"];
    $quantite= $_POST ["quantite"];



        ajouter($reference, $nom, $description, $prix_achat, $prix_vente, $quantite);
    
}
$rows = recuperer();
tableauDynamique($rows);

?>
</body>

</html>
