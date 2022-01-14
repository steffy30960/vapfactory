
<?php
// supprimer un produit
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $user = "root";
    $pass = "johnny30960";
    $pdo = new PDO('mysql:host=localhost;dbname=vap_factory', $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->query("DELETE FROM Stock WHERE id = $id");
}
header("location:index.php");

?>