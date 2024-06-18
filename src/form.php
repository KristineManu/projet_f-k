<!DOCTYPE html>
<html lang="fr">

<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>

<body>
    <h1>AJOUTER UN ARTICLE: </h1>
    <form action="create.php" method="post">
        <select name="type" id="type" required>
            <option value="">Sélectionnez un type de produit</option>
            <option>robe</option>
            <option>pantalon</option>
            <option>top</option>
        </select>
        <br>
        <label for="id_tendance">Tendance:</label>
        <br>
        <select name="id_tendance">
            <option value="">Sélectionnez une tendance</option>
            <?php
            require_once("connect.php");
            // Assumez que la connexion à la base de données est déjà établie
            $sql = "SELECT id, tendance_name FROM tendance";
            $query = $db->query($sql);
            while ($tendance = $query->fetch(PDO::FETCH_ASSOC)) {
                echo "<option value=\"{$tendance['id']}\">{$tendance['tendance_name']}</option>";
            }
            ?>
        </select>
        <br>
        <label for="product_name">Nom du produit:</label>
        <br>
        <input type="text" name="product_name" required>
        <br>
        <label for="product_description">description du produit:</label>
        <br>
        <input type="text" name="product_description" required>
        <br>
        <label for="product_price">Prix:</label>
        <br>
        <input type="text" name="product_price" required>
        <br>
        <label for="product_pic_1">photo 1:</label>
        <br>
        <input type="text" name="product_pic_1" required>
        <br>
        <label for="product_pic_2">photo 2:</label>
        <br>
        <input type="text" name="product_pic_2" required>
        <br>
        <br>
        <button>Ajouter</button>
    </form>
    <br>
    <a href="admin_dashboard.php">Retour</a>
    <?php
    // print_r($_POST);
    ?>
</body>

</html>