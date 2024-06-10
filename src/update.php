<?php
session_start();
if ($_POST) {
    if (
        isset($_POST["statut"]) && !empty($_POST["statut"])
        && isset($_POST["nom"]) && !empty($_POST["nom"])
        && isset($_POST["datation"]) && !empty($_POST["datation"])
        && isset($_POST["postulation"]) && !empty($_POST["postulation"])
        && isset($_POST["methode"]) && !empty($_POST["methode"])
        && isset($_POST["poste"]) && !empty($_POST["poste"])
        && isset($_POST["contrat"]) && !empty($_POST["contrat"])
        && isset($_POST["email"]) && !empty($_POST["email"])
        && isset($_POST["commentaires"]) && !empty($_POST["commentaires"])
    ) {
        require_once("connect.php");

        $id = strip_tags($_POST["id"]);
        $statut = strip_tags($_POST["statut"]);
        $nom = strip_tags($_POST["nom"]);
        $datation = strip_tags($_POST["datation"]);
        $relance = (new DateTime($datation))->modify('+7 days')->format('Y-m-d');
        $postulation = strip_tags($_POST["postulation"]);
        $methode = strip_tags($_POST["methode"]);
        $poste = strip_tags($_POST["poste"]);
        $contrat = strip_tags($_POST["contrat"]);
        $email = strip_tags($_POST["email"]);
        $commentaires = strip_tags($_POST["commentaires"]);
        $userid = $_SESSION['userid'];

        $sql = "UPDATE Recherche SET  statut = :statut, nom = :nom, datation = :datation, relance = :relance, 
        postulation = :postulation, methode = :methode, poste = :poste, contrat = :contrat, 
        email = :email, commentaires = :commentaires
        WHERE id = :id";

        $query = $db->prepare($sql);

        $query->bindValue(":id", $id, PDO::PARAM_INT);
        $query->bindValue(":statut", $statut, PDO::PARAM_STR);
        $query->bindValue(":nom", $nom, PDO::PARAM_STR);
        $query->bindValue(":datation", $datation, PDO::PARAM_STR);
        $query->bindValue(":relance", $relance, PDO::PARAM_STR);
        $query->bindValue(":postulation", $postulation, PDO::PARAM_STR);
        $query->bindValue(":methode", $methode, PDO::PARAM_STR);
        $query->bindValue(":poste", $poste, PDO::PARAM_STR);
        $query->bindValue(":contrat", $contrat, PDO::PARAM_STR);
        $query->bindValue(":email", $email, PDO::PARAM_STR);
        $query->bindValue(":commentaires", $commentaires, PDO::PARAM_STR);

        $query->execute();

        header("Location: user_dashboard.php");
    } else {
        echo "Remplissez TOUS les formulaires SVP !";
    }
}
if (isset($_GET["id"]) && !empty($_GET["id"])) {
    require_once("connect.php");
    // echo $_GET["id"];
    $id = strip_tags($_GET["id"]);

    $sql = "SELECT * FROM Recherche WHERE id = :id";

    $query = $db->prepare($sql);
    // on accroche la valeur id de la reqêtte a celle de la variable $id
    $query->bindValue(":id", $id, PDO::PARAM_INT);
    $query->execute();

    $user = $query->fetch();

    // on verifie si l'utilisateur existe
    if (!$user) {
        header("Location: user_dashboard.php");
    } else {
        require_once("disconnect.php");
    }

    // print_r($user);
} else {
    header("Location: user_dashboard.php");
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
    <h1>Modifier <?= $user["nom"] ?>:</h1>
    <form method="post">
        <label id="statut">Statut de la recherche:</label>
        <br>
        <select name="statut" id="statut" value="<?= $user["statut"] ?>" required>
            <option>A postulé</option>
            <option>Ne correspond pas</option>
            <option>Entretien</option>
            <option>Offre</option>
            <option>Refus</option>
            <option>Embauche</option>
            <option>Pas de réponse</option>
            <option>Relancé</option>
        </select>
        <br>
        <label for="nom">Nom de l'entreprise:</label>
        <br>
        <input type="text" name="nom" value="<?= $user["nom"] ?>" required>
        <br>

        <label for="datation">Date de postulation:</label>
        <br>
        <input type="date" name="datation" value="<?= $user["datation"] ?>" required>
        <br>

        <label id="postulation">Type de postulation:</label>
        <br>
        <select name="postulation" id="postulation" value="<?= $user["postulation"] ?>" required>
            <option>Spontanée</option>
            <option>Réponse à une offre</option>
            <option>Recommandation</option>
            <option>Sollicitation directe</option>
        </select>
        <br>

        <label id="methode">Méthode de postulation:</label>
        <br>
        <select name="methode" id="methode" value="<?= $user["postulation"] ?>" required>
            <option>En personne</option>
            <option>e-mail</option>
            <option>LinkedIn</option>
            <option>Job board</option>
            <option>Website</option>
            <option>Recommandation</option>
            <option>Sollicitation directe</option>
        </select>
        <br>

        <label for="poste">Intitulé du poste:</label>
        <br>
        <input type="text" name="poste" value="<?= $user["poste"] ?>" required>
        <br>

        <label id="contrat">Type de contrat:</label>
        <br>
        <select name="contrat" id="contrat" value="<?= $user["postulation"] ?>" required>
            <option>Stage</option>
            <option>CDD</option>
            <option>CDI</option>
            <option>Apprentissage</option>
            <option>Freelance</option>
        </select>
        <br>

        <label for="email">Adresse email:</label>
        <br>
        <input type="email" name="email" value="<?= $user["email"] ?>" required>
        <br>

        <label for="commentaires">Commentaires:</label>
        <br>
        <textarea name="commentaires" id="commentaires" cols="50" rows="10" placeholder="Votre commentaire"></textarea>
        <br>
        <br>
        <input type="hidden" name="id" value="<?= $user["id"] ?>" required>
        <input type="hidden" name="userid" value="<?= $userid["userid"] ?>" required>


        <button>Modifier</button>
    </form>
    <br>
    <a href="user_dashboard.php">Retour</a>
    <?php
    // print_r($_POST);
    ?>
</body>

</html>