<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>F&K</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Optional Bootstrap Theme CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap-theme.min.css">
</head>
<link rel="stylesheet" href="./style.css">
</head>

<body>


  <?php
  include './element/navbar.php';
  ?>

  <section>
    <div class="contenaire">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <a href="catalogue_tendance.php?id_tendance=2"><img class="d-block w-100" src="./img/section-1_1.png" alt="First slide"></a>
          </div>
          <div class="carousel-item">
            <a href="catalogue_tendance.php?id_tendance=3"><img class="d-block w-100" src="./img/section-1_2.png" alt="Second slide"></a>
          </div>
          <div class="carousel-item">
            <a href="catalogue_tendance.php?id_tendance=1"><img class="d-block w-100" src="./img/section-1_3.png" alt="Third slide"></a>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </section>

  <section class="type">
    <figure class="effect">
      <img src="img/2311208.jpg" height="688px" width="520px" alt="">
      <figcaption>
        <div class="RTP"> <span>ROBE</span> </div>
        <p>ELEGANCE</p>
        <a href="../catalogue_type.php?type=robe"><button class="btn_effect">Découvrez</button></a>
      </figcaption>
    </figure>

    <figure class="effect">
      <img src="img/index_top.jpg" height="688px" width="520px" alt="">
      <figcaption>
        <div class="RTP"><span>TOP</span> </div>
        <p>STYLE</p>
        <a href="../catalogue_type.php?type=top"><button class="btn_effect">Découvrez</button></a>
      </figcaption>
    </figure>
    <figure class="effect">
      <img src="img/index_pantalon.jpg" height="688px" width="520px" alt="">
      <figcaption>
        <div class="RTP"><span>PANTALON</span> </div>
        <p>CHIC</p>
        <a href="../catalogue_type.php?type=pantalon"><button class="btn_effect">Découvrez</button></a>
      </figcaption>
    </figure>

  </section>

  <?php
  include './element/footer.php';
  ?>

  <!-- Bootstrap JS, Popper.js, and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>





</body>

</html>


<script src="script.js"></script>
</body>

</html>