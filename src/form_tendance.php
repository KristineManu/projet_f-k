<!DOCTYPE html>
<html lang="fr">

<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire_Tendance</title>
</head>

<body>
<?php
  include './element/navbar.php';
  ?>
   <div class="conteneur_login">
<div class="conteneur_form">
    <h2>AJOUTER UNE TENDANCE: </h2>
    <form action="create_tendance.php" method="post">
    <div class="form-login">
        <label for="tendance_name">Nom de la tendance:</label>
        <input type="text" name="tendance_name" required>
  
</div>
<div class="form-login">
                            <input class="login-btn"type="submit" value="Ajouter">
                    </div>
    </form>
    
    <button class="login-btn">  <a href="admin_dashboard.php">Retour</a></button>
</div>
</div>
</body>

</html>