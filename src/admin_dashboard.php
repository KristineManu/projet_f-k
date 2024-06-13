<?php
session_start();
require_once("connect.php");

if ($_SESSION['admin'] !== 1) {
    header("Location: index.php");
}

$sql = "SELECT * FROM product";
// On prépare la requêtte
$query = $db->prepare($sql);

// $query->bindValue(":id", $admin, PDO::PARAM_INT);
// on execute la requêtte
$query->execute();
// on recupère les données sous forme de tableau associatif
$product = $query->fetchAll(PDO::FETCH_ASSOC);

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
    <title>Dashboard</title>
</head>

<?php
include './element/navbar.php';
?>

<h1>DASHBOARD</h1>



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
        <th>id</th>
        <th>id_tendance</th>
        <th>type</th>
        <th>product_name</th>
        <th>product_description</th>
        <th>product_price</th>
        <th>product_pic_1</th>
        <th>product_pic_2</th>


    </thead>
    <tbody>

        <?php
        // pour chaque utilisateur recupéré dans $users on affiche une nouvelle ligne dans la table html
        foreach ($product as $prod) {
            // chaque utillisateur de la table $users sera identifié dans le foreach en tant que $user
        ?>
            <tr>
                <td><?= $prod["id"] ?></td>
                <td><?= $prod["id_tendance"] ?></td>
                <td><?= $prod["type"] ?></td>
                <td><?= $prod["product_name"] ?></td>
                <td><?= $prod["product_description"] ?></td>
                <td><?= $prod["product_price"] ?></td>
                <td><?= $prod["product_pic_1"] ?></td>
                <td><?= $prod["product_pic_2"] ?></td>

                <td>
                    <a href="user.php?id=<?= $prod["id"] ?>">Consulter</a>
                    </dt>
                <td>
                    <a href="update.php?id=<?= $prod["id"] ?>">Modifier</a>
                </td>
                <td>
                    <a href="delete.php?id=<?= $prod["id"] ?>">Suprimer</a>

                </td>
            </tr>
        <?php
        }

        ?>

        <div>
            <a href="form.php" class="add-btn">Ajouter un article</a>

            <br>
            <br>

        </div>
    </tbody>
</table>
</body>

</html>