<?php
// On demarre une session 
session_start();
if (
    isset($_POST["product_name"]) && !empty($_POST["product_name"])
    && isset($_POST["product_price"]) && !empty($_POST["product_price"])
    && isset($_POST["product_pic"]) && !empty($_POST["product_pic"])


) {
    require_once("connect.php");
    $product_name = strip_tags($_POST["product_name"]);
    $product_price = strip_tags($_POST["product_price"]);
    $product_pic = strip_tags($_POST["product_pic"]);


    $sql = "INSERT INTO product (product_name, product_price, product_pic)
VALUES (:product_name, :product_price, :product_pic)";
    $query = $db->prepare($sql);
    $query->bindValue(":product_name", $product_name);
    $query->bindValue(":product_price", $product_price);
    $query->bindValue(":product_pic", $product_pic);

    $query->execute();

    $_SESSION["message"] = "Article ajouté";
    header("Location: admin_dashboard.php");
} else {
    echo "Veulliez remplir TOUS les formulaires !";
}
