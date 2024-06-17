<?php
session_start();
require_once("connect.php");

$sql = "SELECT * FROM product";
// On prépare la requêtte
$query = $db->prepare($sql);

// $query->bindValue(":id", $admin, PDO::PARAM_INT);
// on execute la requêtte
$query->execute();
// on recupère les données sous forme de tableau associatif
$product = $query->fetchAll(PDO::FETCH_ASSOC);

// print_r($users);
// echo "<pre>";
// print_r($users);
// echo "</pre>";

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>catalogue</title>
</head>

<?php
include './element/navbar.php';
?>

<section class="section_categorie">
    <div class="container_categorie">
        <div class="categorie categorie_robe"><a href="../catalogue.php?type=robe">ROBE</a></div>
        <div class="categorie categorie_pantalone"><a href="../catalogue.php?type=pantalon">PANTALON</a></div>
        <div class="categorie categorie_jupe"><a href="../catalogue.php?type=top">TOP</a></div>
    </div>
</section>


<section class="contenaire_catalogue">
    <div class="container_items">
        <?php
        // pour chaque utilisateur recupéré dans $users on affiche une nouvelle ligne dans la table html
        foreach ($product as $pr) {
            // chaque utillisateur de la table $users sera identifié dans le foreach en tant que $user
        ?>

            <div class="item">
                <div> <a href="#"><img src="<?= $pr["product_pic_1"] ?>" width="450px" height="600px" alt=""></a></div>

                <div class="titre"> <?= $pr["product_name"] ?></div>
                <div> <?= $pr["product_price"] ?></div>

                <button class="btn"><a href="produit.php"></a>

                </button>
            </div>

    </div>
<?php
        }

?>
</section>

</body>

</html>



<script src="script.js"></script>
</body>

</html>