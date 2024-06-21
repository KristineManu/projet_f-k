<?php

//On demare la session
session_start();
//On inclut la connexion à la base
require_once('connect.php');
if ($_POST) {
    //print_r($_POST);
    if (
        isset($_POST["first_name"]) && !empty($_POST["first_name"])
        && isset($_POST["last_name"]) && !empty($_POST["last_name"])
        && isset($_POST["email"]) && !empty($_POST["email"])
        && isset($_POST["password"]) && !empty($_POST["password"])
        && isset($_POST["password_confirm"]) && !empty($_POST["password_confirm"])
    ) {

        $first_name = strip_tags($_POST["first_name"]);
        $last_name = strip_tags($_POST["last_name"]);
        $email = strip_tags($_POST['email']);
        $password = strip_tags($_POST['password']);
        $password_confirm = strip_tags($_POST['password_confirm']);



        // Vérifier si l'email existe déjà
        $sql = "SELECT id FROM users WHERE email = :email";
        $query = $db->prepare($sql);
        $query->bindParam(':email', $email);
        $query->execute();
        $user = $query->fetch(PDO::FETCH_ASSOC);


        if ($user) {
            $error_message = "L'email est déjà utilisé.";
        }
        // Vérifier que les mots de passe correspondent
        if ($password !== $password_confirm) {
            $error_message = "Les mots de passe ne correspondent pas.";
        } else {
            // Hacher le mot de passe
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            //print_r($hashed_password);
            // Insérer les informations de l'utilisateur dans la base de données
            try {
                $sql = "INSERT INTO users (first_name, last_name, email, `password`) VALUES (:first_name, :last_name, :email, :user_password)";
                $query = $db->prepare($sql);
                $query->bindValue(':first_name', $first_name);
                $query->bindValue(':last_name', $last_name);
                $query->bindValue(':email', $email);
                $query->bindValue(':user_password', $hashed_password);
                $query->execute();

                // Rediriger l'utilisateur vers la page d'user après l'inscription réussie
                header('Location: login.php');
                exit();
            } catch (PDOException $e) {
                if ($e->getCode() == 23000) { // Code d'erreur pour violation de contrainte unique
                    $error_message = "Cette adresse e-mail est déjà utilisée.";
                    echo $e;
                } else {
                    $error_message = "Erreur lors de l'inscription : " . $e->getMessage();
                    echo $e;
                }
            }
        }
    } else {
        echo "Remplire le formulaire";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">

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

<div class="conteneur_login">
<div class="conteneur_form_form">
        <h1>Créer un compte: </h1>
<br>
        <p>Vous avez déjà un compte ?</p>
        <br>
        <button class="login-btn"> <a href="login.php">Se connecter</a></button>
<br>
        
        <form method="post">
            <label for="first_name">Prénom:</label><br>
            <input type="text" id="first_name" name="first_name" required><br>
            <label for="last_name">Nom:</label><br>
            <input type="text" id="last_name" name="last_name" required><br>
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required><br>
            <label for="password">Mot de passe:</label><br>
            <input type="password" id="password" name="password" required><br>
            <label for="password_confirm">Confirmez le mot de passe:</label><br>
            <input type="password" id="password_confirm" name="password_confirm" required><br>
            <button class="login-btn" type="submit" class="Btn_add">Enregistrer</button>
            <br>
        </form>
        <br>
        <button class="login-btn"><a href="index.php" class="back_btn"> Retour</a></button>
</div>
    </div>
</body>

</html>