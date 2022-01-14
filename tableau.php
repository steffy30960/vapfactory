<?php






//fonction tableau dynamique

function tableauDynamique($rows)
{

?>
    <table>
        <tr>
            <th>id</th>
            <th>reference</th>
            <th>nom</th>
            <th>description</th>
            <th>prix achat</th>
            <th>Prix vente</th>
            <th>quantité</th>
        </tr>

        <?php

        foreach ($rows as $statment) {
        ?>
            <tr>
                <td><?php echo $statment['id']; ?></td>
                <td><?php echo $statment['reference']; ?></td>
                <td><?php echo $statment['description']; ?></td>
                <td><?php echo $statment['nom']; ?></td>
                <td><?php echo $statment['prix_achat']; ?></td>
                <td><?php echo $statment['prix_vente']; ?></td>
                <td><?php echo $statment['quantite']; ?></td>
                <td><a href="delete.php?id=<?php echo $statment['id'] ?> ">supprimer</a></td>
                <td><a href="update.php?id=<?php echo $statment['id'] ?> ">modifier</a></td>
            </tr>
    <?php
        }
    }
    ?>
    </table>



