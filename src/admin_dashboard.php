<?php
session_start();
$admin = $_SESSION['admin'];
require_once("connect.php");
$sql = "SELECT * FROM product WHERE id = :id";
// On prépare la requêtte
$query = $db->prepare($sql);

$query->bindValue(":product", $admin, PDO::PARAM_INT);
// on execute la requêtte
$query->execute();
// on recupère les données sous forme de tableau associatif
$Recherche = $query->fetchAll(PDO::FETCH_ASSOC);
// print_r($users);
// echo "<pre>";
// print_r($users);
// echo "</pre>";
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



<a href="logout.php" class="logout-btn">Déconnexion</a>
<br>
<?php
if (!empty($_SESSION["message"])) {
    echo "<p>" . $_SESSION["message"] . "</p>";
    $_SESSION["message"] = "";
}
?>
<br>
<table>
    <thead>
        <th>Statut de la recherche</th>
        <th>Nom de l'entreprise</th>
        <th>Date de postulation</th>
        <th>Date de relance</th>
        <th>Type de postulation</th>
        <th>Méthode de postulation</th>
        <th>Intitulé du poste</th>
        <th>Type de contrat</th>
        <th>Adresse email</th>
        <th>commentaires</th>
    </thead>
    <tbody>

        <?php
        // pour chaque utilisateur recupéré dans $users on affiche une nouvelle ligne dans la table html
        foreach ($Recherche as $user) {
            // chaque utillisateur de la table $users sera identifié dans le foreach en tant que $user
        ?>
            <tr>
                <td><?= $user["statut"] ?></td>
                <td><?= $user["nom"] ?></td>
                <td><?= $user["datation"] ?></td>
                <td><?= $user["relance"] ?></td>
                <td><?= $user["postulation"] ?></td>
                <td><?= $user["methode"] ?></td>
                <td><?= $user["poste"] ?></td>
                <td><?= $user["contrat"] ?></td>
                <td><?= $user["email"] ?></td>
                <td><?= $user["commentaires"] ?></td>
                <td>
                    <a href="user.php?id=<?= $user["id"] ?>">Consulter</a>
                    </dt>
                <td>
                    <a href="update.php?id=<?= $user["id"] ?>">Modifier</a>
                </td>
                <td>
                    <a href="delete.php?id=<?= $user["id"] ?>">Suprimer</a>

                </td>
            </tr>
        <?php
        }

        ?>

        <div>
            <a href="form.php" class="add-stage-btn">Ajouter un Stage</a>

            <br>
            <br>

        </div>
    </tbody>
</table>
</body>

</html>