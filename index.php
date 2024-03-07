<!doctype html>
<html lang="cz">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dalisoviny - Hlavní Stránka</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
  <body>
    
  <?php
session_start();

// Kontrola, zda je uživatel přihlášen
if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] === true) {
    // Pokud je uživatel přihlášen, zahrňte navbar pro přihlášeného uživatele
    include($_SERVER['DOCUMENT_ROOT'] . '/Dalisoviny/navbar/navbar_content_prihlaseny.php');
} else {
    // Pokud uživatel není přihlášen, zahrňte standardní navbar
    include($_SERVER['DOCUMENT_ROOT'] . '/Dalisoviny/navbar/navbar_content.php');
}
?>

<!-- CAROUSEL -->
<div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/1.jpg" class="d-block w-100" height="920px">
      <div class="carousel-caption d-none d-md-block">
        <h5>Led-Digitální pásek s DMX protokolem.</h5>
        <p>Pásek, se kterým lze komunikovat díky protokolu DMX.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="wa.jpg" class="d-block w-100" height="920px" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="wa.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Předešlá</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Další</span>
  </button>
</div>
<div class="text-bg-dark text-center p-3">
  <br>
  <br>
  <p>Chcete pořádat nějakou párty, ale nechcete vyhodit pořádný balík za pár světel, jež se budou maximálně otáčet a měnit pár barev?
    <br>
  <br>Máme pro vás řešení!
  <br>
  <br>Dalisoviny nabízejí tu nejlevnejší variantu na trhu světel s protokolem DMX, jež lze v dnešní době sehnat!
  <br>
  <br>Jak na to? 
  <br>
  <br>Stačí se pouze zaregistrovat!
</p>
</div>






</div>

<!-- Copyright Footer -->
<footer class="bg-dark text-center text-white">

<!-- Grid container -->

<div class="container p-4 pb-0">
  <!-- Section: Social media -->
  <section class="mb-4">
    <!-- Facebook -->
    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
      ><i class="fa fa-facebook-f"></i
    ></a>

    <!-- Twitter -->
    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
      ><i class="fa fa-twitter"></i
    ></a>


    <!-- Instagram -->
    <a class="btn btn-outline-light btn-floating m-1" href="https://www.instagram.com/dalisaak/" role="button"
      ><i class="fa fa-instagram"></i
    ></a>

  </section>
  <!-- Section: Social media -->
</div>
<!-- Grid container -->

<!-- Copyright -->
<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      Dalisoviny © 2024 Všechny práva vyhrazena.
</div>
<!-- Copyright -->
</footer>
</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
