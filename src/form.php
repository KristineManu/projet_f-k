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
        <label for="type">type:</label>
        <br>
        <input type="text" name="type" required>
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