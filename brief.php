<?php


// fonction connexion database
function getDatabaseConnexion()
{
    try {
        $user = "root";
        $pass = "johnny30960";
        $pdo = new PDO('mysql:host=localhost;dbname=vap_factory', $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }
}

// recupere la database
function recuperer()
{
    $con = getDatabaseConnexion();
    $requete = 'SELECT * FROM  Stock';
    $statment = $con->query($requete);
    $statment = $statment->fetchAll(PDO::FETCH_ASSOC);//   fech_assoc = permet de ressortir ton resultat sous tableau associatif
    return $statment;
}
// fonction ajouter un produit
function ajouter( $reference, $nom, $description, $prix_achat, $prix_vente, $quantite)
{
    try {
        $con = getDatabaseConnexion();
        $sql = "INSERT INTO Stock (reference,nom,description,prix_achat, prix_vente, quantite) 
                    VALUES ('$reference', '$nom', '$description', '$prix_achat', '$prix_vente', '$quantite')";
        $con->exec($sql);
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
}
// fonction mettre à jour une reference
function update($user_id, $reference, $nom, $description, $prix_achat, $prix_vente, $quantite)
{
    try {
        $con = getDatabaseConnexion();
        $sql = "UPDATE Stock  
                    SET  
                    reference='$reference', 
                    nom='$nom',
                    description='$description', 
                    prix_achat='$prix_achat', 
                    prix_vente='$prix_vente', 
                    quantite='$quantite';
                    WHERE 
                    user_id='$user_id'"; // clé pour rentrer dans mon dossier
        $con->exec($sql);
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
}





?>

