<?php
//On demare la session
session_start();
//On inclut la connexion à la base
require_once('connect.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>


<body>
    <?php
    include './element/navbar.php';
    ?>


    <section class="section_categorie">
        <div class="container_categorie">
            <div class="categorie categorie_robe"><a href="../catalogue.php?type=robe">ROBE</a></div>
            <div class="categorie categorie_pantalone"><a href="../catalogue.php?type=pantalon">PANTALON</a></div>
            <div class="categorie categorie_jupe"><a href="../catalogue.php?type=top">TOP</a></div>
        </div>
        </saction>
        <div class="contenaire_catalogue">
            <div class="container_items">
                <div class="item item1">
                    <div class="divIMG"><img src="../img/product/echapee_sauvage_1a.jpg" width="450px" height="600px" alt=""></div>

                    <div class="titre"> Tee-Shirt Fantaisie "Wild Free"</div>
                    <div class="prix"> 29.99€</div>

                    <button class="btn"><a href="produit.php"></a>

                    </button>
                </div>
                <div class="item item2">
                    <div class="divIMG"><img src="../img/product/echapee_sauvage_2a.jpg" width="450px" height="600px" alt=""></div>
                    <div class="titre"> Tee-Shirt Fantaisie "Wild Free"</div>
                    <div class="prix"> 29.99€</div>
                    <button class="btn"><a href="produit.php"></a></button>
                </div>
                <div class="item item3">
                    <div class="divIMG"><img src="../img/product/echapee_sauvage_3a.jpg" width="450px" height="600px" alt=""></div>
                    <div class="titre"> Tee-Shirt Fantaisie "Wild Free"</div>
                    <div class="prix"> 29.99€</div>
                    <button class="btn"><a href="produit.php"></a></button>
                </div>
            </div>
        </div>
        <script src="script.js"></script>
</body>

</html>