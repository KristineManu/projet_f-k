<?php
session_start();
require_once("connect.php");
$sql = "SELECT * FROM ";
// On prépare la requêtte
$query = $db->prepare($sql);
// on execute la requêtte
$query->execute();
// on recupère les données sous forme de tableau associatif
$Recherche = $query->fetchAll(PDO::FETCH_ASSOC);
// print_r($users);
// echo "<pre>";
// print_r($users);
// echo "</pre>";
