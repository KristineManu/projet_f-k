<!DOCTYPE html>
<html lang="fr">

<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire_Tendance</title>
</head>

<body>
    <h1>AJOUTER UNE TENDANCE: </h1>
    <form action="create_tendance.php" method="post">
        <label for="tendance_name">Nom de la tendance:</label>
        <br>
        <input type="text" name="tendance_name" required>
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