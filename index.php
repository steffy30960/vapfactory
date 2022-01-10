<?php

?>


<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="vapfactory.css">
  <title>Vap factory</title>
  <?php
  // je relie mon php avec ma base de donnée sql

  try
  {
      // On se connecte à MySQL
      $mysqlClient = new PDO('mysql:host=localhost;dbname=Vap Factory;charset=utf8', 'root', 'johnny30960');
  }
  catch(Exception $e)
  {
      // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
  }
  
  // Si tout va bien, on peut continuer
  
  // On récupère tout le contenu de la table Stock
  $sqlQuery = 'SELECT * FROM Stock';
  $stockStatement = $mysqlClient->prepare($sqlQuery);
  $stockStatement->execute();
  $stock = $stockStatement->fetchAll();
  

  ?>
  
        <p><?php echo $stocks['nom']; ?></p>
  

</head>
<body>
    <h1>VAP FACTORY</h1>
    <h2>STOCK </h2>
    

<table >
    <thead >
        <tr>
            <td>Référence</td>
            <td>nom du produit</td>
            <td>Description</td>
            <td>Prix d'achat</td>
            <td>Prix de vente</td>
            <td>quantite</td>
            <td>id</td>

        </tr>
    </thead>
    <tbody>
        <tr>
        <?php 
                        foreach ($stock as $stocks) {
                        echo "<td>$stocks[Reference]</td>";
                        echo "<td>$stocks[nom]</td>";
                        echo "<td>$stocks[description]</td>";
                        echo "<td>$stocks[prix_achat]</td>";
                        echo "<td>$stocks[prix_vente]</td>";
                        echo "<td>$stocks[quantite]</td>";
                        echo "<td>$stocks[id]</td>"; 


                        }
        ?>
        </tr>
    </tbody>
</table>






</body>
</html>

