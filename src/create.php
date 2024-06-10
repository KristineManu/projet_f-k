<?php
// On demarre une session 
session_start();
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

    $sql = "INSERT INTO Recherche (statut, nom, datation, relance, postulation, methode, poste, contrat, email, commentaires, userid)
VALUES (:statut, :nom, :datation, :relance, :postulation, :methode, :poste, :contrat, :email, :commentaires, :userid)";
    $query = $db->prepare($sql);
    $query->bindValue(":statut", $statut);
    $query->bindValue(":nom", $nom);
    $query->bindValue(":datation", $datation);
    $query->bindValue(":relance", $relance);
    $query->bindValue(":postulation", $postulation);
    $query->bindValue(":methode", $methode);
    $query->bindValue(":poste", $poste);
    $query->bindValue(":contrat", $contrat);
    $query->bindValue(":email", $email);
    $query->bindValue(":commentaires", $commentaires);
    $query->bindValue(":userid", $userid);
    $query->execute();

    $_SESSION["message"] = "Stage ajouté";
    header("Location: user_dashboard.php");
} else {
    echo "Veulliez remplir TOUS les formulaires !";
}
