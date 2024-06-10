<?php
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
        header("Location: index.php");
    } else {
        require_once("disconnect.php");
    }
    // print_r($user);
} else {
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $user["nom"] ?></title>
</head>

<body>
    <h1>Pour l'entreprise <?= $user["nom"] ?>:</h1>
    <p><?= "-Votre statut de recherche est : " . $user["statut"]
            . "<br><br>"
            . "-Vous avez postulez le: " .  $user["datation"]
            . "<br><br>"
            . "-Vous devez relancer l'entreprise le : " . $user["relance"]
            . "<br><br>"
            . "-Votre type de postulation est : " . $user["postulation"]
            . "<br><br>"
            . "-Votre méthode de postulation est : " . $user["methode"]
            . "<br><br>"
            . "-L'intitulé du poste est : " . $user["poste"]
            . "<br><br>"
            . "-Le type de contrat est : " . $user["contrat"]
            . "<br><br>"
            . "-Votre email de contact est : " . $user["email"]
            . "<br><br>"
            . "-Vos commentaires sont : " . $user["commentaires"];
        ?></p>
    <a href="user_dashboard.php">Retour</a>
</body>

</html>