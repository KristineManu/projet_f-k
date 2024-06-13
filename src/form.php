<!DOCTYPE html>
<html lang="fr">

<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>

<body>
    <h1>CONNECTEZ-VOUS A VOTRE COMPTE</h1>
    <form action="create.php" method="post">
        <label for="product_name">Nom du produit:</label>
        <br>
        <input type="text" name="product_name" required>
        <br>
        <label for="product_price">Prix:</label>
        <br>
        <input type="text" name="product_price" required>
        <br>
        <label for="product_pic">photo:</label>
        <br>
        <input type="text" name="product_pic" required>
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