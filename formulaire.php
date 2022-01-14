<?php





?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title >formulaire</title>
</head>

<body>

    <h2>formulaire</h2>
    <a href="tableau.php">listes des réferences</a>
    <form action="index.php"  method= "POST" style="display:flex;flex-direction:column;align-items:center; width:50%;">

        <input type="text" id="reference" name="reference" placeholder="Reference"  value=""><br>

        <input type="text" id="nom" name="nom" placeholder="Nom article" value=""><br>

        <input type="text" id="description" name="description" placeholder="description article"  value=""><br>

        <input type="text" id="prix-achat" name="prix_achat" placeholder="Prix Achat"  value=""><br>

        <input type="text" id="prix_vente" name="prix_vente" placeholder="Prix Vente"  value=""><br>

        <input type="text" id="quantite" name="quantite" placeholder="quantite"  value=""><br>

        <input type="submit" value="Ajouter">
        <input type="reset" value="Supprimer">
    </form>



</body>

</html>
