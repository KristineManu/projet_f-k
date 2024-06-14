<?php
session_start();
require_once("connect.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (
        isset($_POST["id"]) && !empty($_POST["id"])
        && isset($_POST["type"]) && !empty($_POST["type"])
        && isset($_POST["product_name"]) && !empty($_POST["product_name"])
        && isset($_POST["product_description"]) && !empty($_POST["product_description"])
        && isset($_POST["product_price"]) && !empty($_POST["product_price"])
        && isset($_POST["product_pic_1"]) && !empty($_POST["product_pic_1"])
        && isset($_POST["product_pic_2"]) && !empty($_POST["product_pic_2"])
        && isset($_POST["id_tendance"]) && !empty($_POST["id_tendance"])
    ) {
        $id = strip_tags($_POST["id"]);
        $id_tendance = $_POST["id_tendance"];
        $type = strip_tags($_POST["type"]);
        $product_name = strip_tags($_POST["product_name"]);
        $product_description = strip_tags($_POST["product_description"]);
        $product_price = strip_tags($_POST["product_price"]);
        $product_pic_1 = strip_tags($_POST["product_pic_1"]);
        $product_pic_2 = strip_tags($_POST["product_pic_2"]);

        $sql = "UPDATE product SET id_tendance = :id_tendance, type = :type, product_name = :product_name, product_description = :product_description, product_price = :product_price, product_pic_1 = :product_pic_1, product_pic_2 = :product_pic_2 
        WHERE id = :id";

        $query = $db->prepare($sql);

        $query->bindValue(":id", $id, PDO::PARAM_INT);
        $query->bindValue(":id_tendance", $id_tendance, PDO::PARAM_INT);
        $query->bindValue(":type", $type, PDO::PARAM_STR);
        $query->bindValue(":product_name", $product_name, PDO::PARAM_STR);
        $query->bindValue(":product_description", $product_description, PDO::PARAM_STR);
        $query->bindValue(":product_price", $product_price, PDO::PARAM_STR);
        $query->bindValue(":product_pic_1", $product_pic_1, PDO::PARAM_STR);
        $query->bindValue(":product_pic_2", $product_pic_2, PDO::PARAM_STR);

        $query->execute();

        header("Location: admin_dashboard.php");
    } else {
        echo "Remplissez TOUS les formulaires SVP !";
    }
}

if (isset($_GET["id"]) && !empty($_GET["id"])) {
    $id = strip_tags($_GET["id"]);

    $sql = "SELECT * FROM product WHERE id = :id";

    $query = $db->prepare($sql);
    $query->bindValue(":id", $id, PDO::PARAM_INT);
    $query->execute();

    $user = $query->fetch();

    if (!$user) {
        header("Location: admin_dashboard.php");
    }
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
        <select name="type" id="type">
            <option value="<?= $user["type"] ?>" required>Sélectionnez un type de produit</option>
            <option>robe</option>
            <option>pantalon</option>
            <option>top</option>
        </select>
        <br>
        <label for="id_tendance">Tendance:</label>
        <br>
        <select name="id_tendance" required>
            <option value="">Sélectionnez une tendance</option>
            <?php
            $sql = "SELECT id, tendance_name FROM tendance";
            $query = $db->query($sql);
            $currentTendanceId = isset($user["id_tendance"]) ? $user["id_tendance"] : 0; // Mettez à 0 ou quelque chose de similaire si id_tendance n'est pas défini
            while ($tendance = $query->fetch(PDO::FETCH_ASSOC)) {
                $selected = ($tendance['id'] == $currentTendanceId) ? 'selected' : '';
                echo "<option value=\"{$tendance['id']}\" $selected>{$tendance['tendance_name']}</option>";
            }
            ?>
        </select>
        <br>
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