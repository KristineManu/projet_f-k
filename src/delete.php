<?php
// On verifie qu' il ya bien un id dans l'url et que l'utilisateur correspondant existe
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
        // On gére la supression de l'utilisateur
        $sql = "DELETE FROM Recherche WHERE id = :id";

        $query = $db->prepare($sql);

        // on accroche la valeur id de la reqêtte a celle de la variable $id
        $query->bindValue(":id", $id, PDO::PARAM_INT);

        $query->execute();

        header("Location: user_dashboard.php");
    }


    // print_r($user);
} else {
    header("Location: index.php");
}
