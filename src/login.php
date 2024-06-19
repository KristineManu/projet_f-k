<?php
session_start(); // Démarrage de la session

if (!empty($_SESSION["message"])) {
    echo "<p>" . $_SESSION["message"] . "</p>";
    $_SESSION["message"] = "";
}

// Connexion à la base de données
require_once("connect.php");



// Vérification si les données du formulaire ont été soumises
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['email']) && !empty($_POST['password'])) {
    // Récupération des données du formulaire
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Préparation de la requête pour récupérer l'utilisateur par son nom d'utilisateur
    $stmt = $db->prepare("SELECT * FROM users WHERE email = :email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    // Récupération de l'utilisateur
    $email = $stmt->fetch(PDO::FETCH_ASSOC);

    // Vérification du mot de passe
    if ($email && password_verify($password, $email['password'])) {
        // Si le mot de passe est correct, création de la session utilisateur
        $_SESSION['admin'] = $email['admin'];

        // $_SESSION["email"] = 

        // Redirection vers la page protégée ou affichage d'un message de succès
        $_SESSION["message"] = "Connexion réussie.";
        if ($_SESSION['admin'] === 1) {
            header("Location: admin_dashboard.php");
        } else {
            header("Location: index.php");
        }
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
    <title>F&K_Login</title>
</head>
<body>
<?php
  include './element/navbar.php';
  ?>
    <div class="conteneur_login">
        <div class="conteneur_form">
           
            <!-- Formulaire de connexion -->
                <h1>Connectez-vous: </h1>
                <p>Pas de compte?</p><button class="login-btn"><a href="inscription.php">S'inscrire</a></button>
                <form method="post" action="login.php">
                    <div class="form-login">
                        <label for="e-mail"> E-mail: </label>
                        <input type="text" name="email" required>
                    </div>
                    <div class="form-login">
                            <label for="password">Mot de passe: </label>
                             <input type="password" name="password" required>
                    </div>
                    <div class="form-login">
                            <input class="login-btn"type="submit" value="Se connecter">
                    </div>
                </form>
                 <button class="login-btn"><a  href="index.php">Retour</a></button>
           
        
                
        </div>     
    </div>

</div>


    
<script src="script.js"></script>
</body>