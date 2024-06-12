<?php
session_start(); // Démarrage de la session

require_once("connect.php");

// Vérification que les données ont été soumises
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['username']) && !empty($_POST['pass']) && !empty($_POST['email'])) {
    // Récupération et nettoyage des données soumises
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $pass = password_hash($_POST['pass'], PASSWORD_DEFAULT); // Hash du mot de passe

    // Préparation de la requête d'insertion
    $stmt = $db->prepare("INSERT INTO users (username, email, pass) VALUES (:username, :email, :pass)");

    // Exécution de la requête en liant les paramètres
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':pass', $pass);

    if ($stmt->execute()) {
        // Inscription réussie
        $_SESSION["message"] = "Inscription réussie. Vous pouvez maintenant vous connecter.";
        header("Location: login.php");
    } else {
        // Erreur lors de l'inscription
        echo "Une erreur est survenue. Veuillez réessayer.";
    }
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Recherche de Stage et
        d'Emploi</title>
</head>
<h1>RECERCHE DE STAGE ET D'EMPLOI:</h1>
<p class="orga">Je m'organise</p>
<!-- Formulaire d'inscription -->
<div class=maincontent>
    <div class="content">
        <div class="log1">
            <a class=boutonsignup href="signup.php">S'inscrire</a>
            <a class=boutonloginx href="login.php">Se connecter</a>
        </div>
        <br>
        <div class="log2">
            <form method="post" action="signup.php"><br>
                Nom d'utilisateur: <br>
                <input type="text" name="username" required><br>
                Email: <br><input type="email" name="email" required><br>
                Mot de passe: <br><input type="pass" name="pass" required><br><br>
                <input type="submit" value="S'inscrire">
            </form>
        </div>
        <br>
        <a href="index.php">Retour</a>
    </div>
</div>