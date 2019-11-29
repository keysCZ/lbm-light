<?php
    ob_Start();
    include("../includes/header_modeles.php");
    $buffer=ob_get_contents();
    ob_end_clean();

    $buffer=str_replace("%TITLE%","ADIDAS",$buffer);
    echo $buffer;
?>

  <!-- Gallery -->
  <div class="pi-draggable">
    <div class="text-center mx-auto">
      <div class="cover2 offset-lg-4 col-lg-4 py-5">
        <h2>The Latest Best Models</h2>
        <h3>ADIDAS</h3>
      </div>
      <div class="carousel slide" data-interval="3000" data-ride="carousel" id="carousel1" style="height: 570px; margin-left: auto; margin-right: auto;">
        <div class="carousel-inner ">
          <div class="carousel-item active"> <img class="d-block " style="height: 570px; width: 100%" src="../assets/img-adidas/DEMO YEEZY350.PNG"> </div>
          <div class="carousel-item"> <img class="d-block " style="height: 570px; width: 100%" src="../assets/img-adidas/DEMO FALCON.PNG"> </div>
          <div class="carousel-item"> <img class="d-block " style="height: 570px; width: 100%" src="../assets/img-adidas/DEMO YEEZY700.PNG"> </div>
          <div class="carousel-item"> <img class="d-block " style="height: 570px; width: 100%" src="../assets/img-adidas/DEMO OZWEEGO2.PNG"> </div>
        </div>
        <ol class="carousel-indicators">
          <li data-target="#carousel1" data-slide-to="0" class="active"> </li>
          <li data-target="#carousel1" data-slide-to="1" class=""> </li>
          <li data-target="#carousel1" data-slide-to="2" class=""> </li>
          <li data-target="#carousel1" data-slide-to="3" class=""> </li>
        </ol>
      </div>
    </div>
  </div>
  <!-- Gallery -->
  <!-- Menu -->
  <!-- Carousel reviews -->
  <!-- Carousel venue -->
  <!-- Events -->
  <!-- Book section -->
  <!-- Footer -->
  <div class="py-5" style="">
    <div class="container" style="font-size: 12px;">
      <div class="row">
        <div class="text-center mx-auto col-md-12">
          <h1>Tous les modèles ADIDAS</h1>
        </div>
      </div>
      <div class="row">
       <!-- <div class="col-lg-4">
          <div class="card text-center">
            <div class="card-image">
              <img src="../assets/img-adidas/YEEZY/700/INERTIA.PNG" class="img-fluid">
            </div>
            <div class="card-header p-3">
              <h3>YEEZY</h3>
            </div>
            <div class="card-body p-3">
              <p>Fruit de la collaboration entre Adidas et le rappeur Kanye West, la nouvelle Yeezy Boost est une sneaker très attendue des amoureux de baskets. Communication bien rodée, design réussi, clients célèbres: analyse des facteurs de son succès.</p>
              <a class="btn btn-primary" href="Adidas/Yeezy.html" draggable="true">Voir les modèles</a>
            </div>
          </div>
        </div>-->
        <div class="col-lg-6">
          <div class="card text-center">
            <div class="card-image">
              <img src="../assets/img-adidas/ORIGINALS/SUPERSTAR/J W.PNG" class="img-fluid" height="175px">
            </div>
            <div class="card-header p-3">
              <h3>ORIGINALS</h3>
            </div>
            <div class="card-body p-3">
              <p>Trois bandes. Cuir premium. Designs iconiques. La collection ACCUEIL of Classics, un style intemporel pour toutes les occasions.</p><br>
              <a class="btn btn-primary" href="Adidas/Originals.php" draggable="true">Voir les modèles</a>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card text-center">
            <div class="card-image">
              <img src="../assets/img-adidas/OZWEEGO/core.PNG" class="img-fluid">
            </div>
            <div class="card-header p-3">
              <h3>OZWEEGO</h3>
            </div>
            <div class="card-body p-3">
              <p>Cette chaussure modernise un style de la fin des 90's et du début des années 2000. Elle mixe des détails rétro à des lignes futuristes. Elle est conçue avec un mix de mesh, suède et TPU souple. Elle offre un maintien ciblé à l'avant-pied et au talon pour une foulée tout en souplesse.</p>
              <a class="btn btn-primary" href="Adidas/">Voir les modèles</a>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card text-center">
            <div class="card-image">
              <img src="../assets/img-adidas/FALCON/COLLEGIATE NAVY.PNG" class="img-fluid py-3">
            </div>
            <div class="card-header p-3">
              <h3>FALCON</h3>
            </div>
            <div class="card-body p-3">
              <p>Les vibes adidas des 90's dans un look plein d'audace. Cette sneaker apporte un twist subversif à un modèle de running rétro. Sa tige en mesh et suède affiche des touches de couleur et des finitions métallisées. La semelle intermédiaire légère en EVA offre un confort durable.</p>
              <a class="btn btn-primary" href="Adidas/AM95.html">Voir les modèles</a>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card text-center">
            <div class="card-image">
              <img src="../assets/img-adidas/ULTRABOOST/1.PNG" class="img-fluid">
            </div>
            <div class="card-header p-3">
              <h3>ULTRABOOST</h3>
            </div>
            <div class="card-body p-3">
              <p>UNE CHAUSSURE DE RUNNING DYNAMIQUE AVEC UNE TIGE EN MAILLE QUI S'ADAPTE À LA FORME DE TON PIED.<BR>
              L'Ultraboost, réinventée. Mets de l'énergie dans ton run avec cette chaussure équipée des technologies-clés reboostées. La tige en maille offre une sensation seconde peau grâce à sa technologie qui s'adapte aux mouvements de ton pied pour un maintien optimal. L'amorti double densité soutient l'intérieur du pied et dynamise ta foulée.</p>
              <a class="btn btn-primary" href="#">Voir les modèles</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="text-center bg-dark pt-5">
    <div class="container">
      <div class="row">
        <div class="col-md-4 p-3">
          <h2 class="mb-4">Contact</h2>
          <p class="m-0">
            <a href="tel:+246 - 542 550 5462" class="text-white">+246 - 542 550 5462</a>
          </p>
          <p>
            <a href="mailto:info@pingendo.com" class="text-white">info@pingendo.com</a>
          </p>
        </div>
        <div class="col-md-4 p-3">
          <h2 class="mb-4">Location</h2>
          <p>
            <a href="https://www.google.it/maps" target="blank" class="text-white">23 Fake Street <br>Seattle, WA 00000</a>
          </p>
        </div>
        <div class="col-md-4 p-3">
          <h2 class="mb-4">Openings</h2>
          <p>11:00 - 15:00 &amp; 19:00 - 00:00 Tue/Fri <br>11:00 - 15:00 &amp; 19:00 - 02:00 Sat/Sun</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 mt-3">
          <p class="text-center text-muted">© Copyright 2018 Pingendo - All rights reserved. </p>
        </div>
      </div>
    </div>
  </div>
  <!-- JavaScript dependencies -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <!-- Script: Smooth scrolling between anchors in the same page -->
  <script src="../js/smooth-scroll.js"></script>
  <script src="../js/style.js"></script>
</body>

</html>