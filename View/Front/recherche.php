<?php
include '../Controller/produitsP.php';
$produitsP = new produitsP();

if (isset($_GET['label']) && !empty($_GET['label'])) {
    $list = $produitsP->showprooduits($_GET['label']);
} else {
    $list = $produitsP->listeproduits();
}
?>
<html>

<head></head>

<body>

    <div>
        <form action="" method="GET">
            <input type="text" name="label" id="label" placeholder="Enter produits name">
            <input type="submit" value="Search">
        </form>
    </div>

    <center>
        <h1>List of produits</h1>
    </center>
    <table border="1" align="center" width="70%">
        <tr>
            <th>Id</th>
            <th>nom</th>
            <th>quantite</th>
            <th>prix</th>
            
        </tr>
        <?php
        foreach ($list as $produits) {
        ?>
            <tr>
                <td><?= $produits['idproduits']; ?></td>
                <td><?= $produits['nom']; ?></td>
                <td><?= $produits['quantite']; ?></td>
                <td><?= $produits['prix']; ?></td>
            
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>