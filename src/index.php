<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tutoriel Menu Responsive avec Burger Animé (HTML, CSS, JAVASCRIPT)</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Optional Bootstrap Theme CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap-theme.min.css">
</head>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <nav class="navbar dark-mode" role="navigation">
    <div class="navbar__logo">
    <img src="./images/logo.svg" alt="logo">
    <div>WAMES</div> 
    </div>   
    <ul class="navbar__links">
      <li class="navbar__link first"><a href="#">CATALOGUE</a></li>
      <li class="navbar__link second"><a href="#section2">MON COMPTE</a></li>
      <li class="navbar__link third"><a href="#"><img src="./img/logo-facebook.svg" alt=""></a></li>
      <li class="navbar__link four"><a href="#"><img src="./img/logo-instagram.svg" alt=""></a></li>
      <li class="navbar__link fifth"><a href="#"><img src="./img/logo-twitter.svg" alt=""></a></li>
    </ul>   
    <button class="burger">
      <span class="bar"></span>  
    </button>   
  </nav>




  <section1>
<div class="contenaire">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="./img/test-fk-1.webp" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://via.placeholder.com/800x400?text=Slide+2" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://via.placeholder.com/800x400?text=Slide+3" alt="Third slide">
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
</section>
<!-- Bootstrap JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

  </div>
  <script src="script.js"></script>
</body>
</html>