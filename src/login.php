<?php
session_start(); // Démarrage de la session

if (!empty($_SESSION["message"])) {
    echo "<p>" . $_SESSION["message"] . "</p>";
    $_SESSION["message"] = "";
}

// Connexion à la base de données
require_once("connect.php");



// Vérification si les données du formulaire ont été soumises
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['username']) && !empty($_POST['pass'])) {
    // Récupération des données du formulaire
    $username = $_POST['username'];
    $pass = $_POST['pass'];

    // Préparation de la requête pour récupérer l'utilisateur par son nom d'utilisateur
    $stmt = $db->prepare("SELECT * FROM users WHERE username = :username");
    $stmt->bindParam(':username', $username);
    $stmt->execute();

    // Récupération de l'utilisateur
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // Vérification du mot de passe
    if ($user && password_verify($pass, $user['pass'])) {
        // Si le mot de passe est correct, création de la session utilisateur
        $_SESSION['userid'] = $user['id'];
        $_SESSION['username'] = $user['username'];

        // Redirection vers la page protégée ou affichage d'un message de succès
        $_SESSION["message"] = "Connexion réussie.";
        header("Location: user_dashboard.php");
    } else {
        // Si le mot de passe est incorrect ou l'utilisateur n'existe pas
        echo "Nom d'utilisateur ou mot de passe incorrect.";
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
<!-- Formulaire de connexion -->
<div class=maincontent>
    <div class="content">
        <div class="log1">
            <a class=boutonsignupx href="signup.php">S'inscrire</a>
            <a class=boutonlogin href="login.php">Se connecter</a>
        </div>
        <div class="log2">
            <form method="post" action="login.php">
                <br>
                Nom d'utilisateur: <br><input type="text" name="username" required><br>
                Mot de passe: <br><input type="pass" name="pass" required><br><br>
                <input type="submit" value="Se connecter">
            </form>
        </div>
        <br>
        <a href="index.php">Retour</a>
    </div>
</div>