<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tendance</title>
  <link rel="stylesheet" href="../style.css">
</head>

<body>

  <?php
  include './element/navbar.php';
  ?>

  <section>
    <div class="contenaire_tendance">
      <div class="contenaire_photo">
        <a href="../catalogue_tendance_jungle_paradise.php?tendance=jungle_paradise"><img src="../img/tendance1.jpg" height="688px" width="520px" alt=""></a>
        <a href="../catalogue_tendance_terres_devasion.php?tendance=terres_devasion"><img src="../img/tendance2.jpg" height="688px" width="520px" alt=""></a>
        <a href="../catalogue_tendance_echapee_sauvage.php?tendance=echapee_sauvage"><img src="../img/tendance3.jpg" height="688px" width="520px" alt=""></a>
      </div>
    </div>
  </section>
  <?php
  include './element/footer.php';
  ?>



  <script src="./script.js"></script>
</body>


</html>