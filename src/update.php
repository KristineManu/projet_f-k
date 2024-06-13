<?php
session_start();
if ($_POST) {
    if (
        isset($_POST["id"]) && !empty($_POST["id"])
        && isset($_POST["product_name"]) && !empty($_POST["product_name"])
        && isset($_POST["product_description"]) && !empty($_POST["product_description"])
        && isset($_POST["product_price"]) && !empty($_POST["product_price"])
        && isset($_POST["product_pic_1"]) && !empty($_POST["product_pic_1"])
        && isset($_POST["product_pic_2"]) && !empty($_POST["product_pic_2"])

        && isset($_POST["id_product"]) && !empty($_POST["id_product"])
        && isset($_POST["tendance"]) && !empty($_POST["tendance"])
        && isset($_POST["type"]) && !empty($_POST["type"])

    ) {
        require_once("connect.php");
        $id = strip_tags($_POST["id"]);
        $product_name = strip_tags($_POST["product_name"]);
        $product_description = strip_tags($_POST["product_description"]);
        $product_price = strip_tags($_POST["product_price"]);
        $product_pic_1 = strip_tags($_POST["product_pic_1"]);
        $product_pic_2 = strip_tags($_POST["product_pic_2"]);

        $id_product = strip_tags($_POST["id_product"]);
        $tendance = strip_tags($_POST["tendance"]);
        $type = strip_tags($_POST["type"]);

        $sql = "UPDATE product SET id = :id, product_name = :product_name, product_description = :product_description, product_price = :product_price, product_pic_1 = :product_pic_1, product_pic_2 = :product_pic_2 
        WHERE id = :id";

        $query = $db->prepare($sql);

        $query->bindValue(":id", $id, PDO::PARAM_INT);
        $query->bindValue(":product_name", $product_name, PDO::PARAM_STR);
        $query->bindValue(":product_description", $product_description, PDO::PARAM_STR);
        $query->bindValue(":product_price", $product_price, PDO::PARAM_STR);
        $query->bindValue(":product_pic_1", $product_pic_1, PDO::PARAM_STR);
        $query->bindValue(":product_pic_2", $product_pic_2, PDO::PARAM_STR);

        $query->execute();

        $sql = "UPDATE categorie SET id_product = :id_product, tendance = :tendance, type = :type 
        WHERE id_product = :id_product";

        $query = $db->prepare($sql);

        $query->bindValue(":id_product", $id_product, PDO::PARAM_INT);
        $query->bindValue(":tendance", $tendance, PDO::PARAM_STR);
        $query->bindValue(":type", $type, PDO::PARAM_STR);


        $query->execute();

        header("Location: admin_dashboard.php");
    } else {
        echo "Remplissez TOUS les formulaires SVP !";
    }
}
if (isset($_GET["id"]) && !empty($_GET["id"])) {
    require_once("connect.php");
    // echo $_GET["id"];
    $id = strip_tags($_GET["id"]);

    $sql = "SELECT * FROM product WHERE id = :id";

    $query = $db->prepare($sql);
    // on accroche la valeur id de la reqêtte a celle de la variable $id
    $query->bindValue(":id", $id, PDO::PARAM_INT);
    $query->execute();

    $user = $query->fetch();

    $sql = "SELECT * FROM categorie WHERE id_product = :id";

    $query = $db->prepare($sql);
    // on accroche la valeur id de la reqêtte a celle de la variable $id
    $query->bindValue(":id", $id, PDO::PARAM_INT);
    $query->execute();

    $product = $query->fetch();

    // on verifie si l'utilisateur existe
    if (!$user) {
        header("Location: admin_dashboard.php");
    } else {
        require_once("disconnect.php");
    }

    // print_r($user);
} else {
    header("Location: admin_dashboard.php");
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>

<body>
    <h1>Modifier <?= $user["product_name"] ?>:</h1>
    <form method="post">
        <label for="product_name">Nom du produit:</label>
        <br>
        <input type="text" name="product_name" value="<?= $user["product_name"] ?>" required>
        <br>
        <label for="product_description">description du produit:</label>
        <br>
        <input type="text" name="product_description" value="<?= $user["product_description"] ?>" required>
        <br>
        <label for="product_price">Prix:</label>
        <br>
        <input type="text" name="product_price" value="<?= $user["product_price"] ?>" required>
        <br>
        <label for="product_pic_1">photo:</label>
        <br>
        <input type="text" name="product_pic_1" value="<?= $user["product_pic_1"] ?>" required>
        <br>
        <label for="product_pic_2">photo:</label>
        <br>
        <input type="text" name="product_pic_2" value="<?= $user["product_pic_2"] ?>" required>
        <br>
        <label for="tendance">tendance:</label>
        <br>
        <input type="text" name="tendance" value="<?= $product["tendance"] ?>" required>
        <br>
        <label for="type">type:</label>
        <br>
        <input type="text" name="type" value="<?= $product["type"] ?>" required>
        <br>
        <br>
        <input type="hidden" name="id" value="<?= $user["id"] ?>" required>
        <input type="hidden" name="id_product" value="<?= $product["id_product"] ?>" required>
        <br>
        <br>
        <button>Modifier</button>
    </form>
    <br>
    <a href="admin_dashboard.php">Retour</a>
    <?php
    // print_r($_POST);
    ?>
</body>

</html>