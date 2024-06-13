<?php
session_start();
if ($_POST) {
    if (
        isset($_POST["id"]) && !empty($_POST["id"])
        && isset($_POST["product_name"]) && !empty($_POST["product_name"])
        && isset($_POST["product_description"]) && !empty($_POST["product_description"])
        && isset($_POST["product_price"]) && !empty($_POST["product_price"])
        && isset($_POST["product_pic"]) && !empty($_POST["product_pic"])

    ) {
        require_once("connect.php");
        $id = strip_tags($_POST["id"]);
        $product_name = strip_tags($_POST["product_name"]);
        $product_description = strip_tags($_POST["product_description"]);
        $product_price = strip_tags($_POST["product_price"]);
        $product_pic = strip_tags($_POST["product_pic"]);

        $sql = "UPDATE product SET id = :id, product_name = :product_name, product_description = :product_description, product_price = :product_price, product_pic = :product_pic 
        WHERE id = :id";

        $query = $db->prepare($sql);

        $query->bindValue(":id", $id, PDO::PARAM_INT);
        $query->bindValue(":product_name", $product_name, PDO::PARAM_STR);
        $query->bindValue(":product_description", $product_description, PDO::PARAM_STR);
        $query->bindValue(":product_price", $product_price, PDO::PARAM_STR);
        $query->bindValue(":product_pic", $product_pic, PDO::PARAM_STR);

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
        <label for="product_pic">photo:</label>
        <br>
        <input type="text" name="product_pic" value="<?= $user["product_pic"] ?>" required>
        <br>
        <br>
        <input type="hidden" name="id" value="<?= $user["id"] ?>" required>
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