<?php
    ob_Start();
    include("../includes/header_modeles.php");
    $buffer=ob_get_contents();
    ob_end_clean();

    $buffer=str_replace("%TITLE%","Enfants",$buffer);
    echo $buffer;
?>
  <!-- Gallery -->
  <!-- Menu -->
  <!-- Carousel reviews -->
  <div class="pi-draggable">
    <div class="text-center mx-auto">
      <div class="cover2 offset-lg-4 col-lg-4 py-5">
        <h2>The Latest Best Models</h2>
        <h3>Pour Enfants</h3>
      </div>
      <div class="carousel slide" data-interval="3000" data-ride="carousel" id="carousel1" style="height: 570px; margin-left: auto; margin-right: auto;">
        <div class="carousel-inner ">
          <div class="carousel-item active"> <img class="d-block " style="height: 570px; width: 100%" src="../assets/img-nike/DEMO270.PNG" alt="https://images.wave.fr/images//nike-air-max-270-2-2.jpg"> </div>
          <div class="carousel-item"> <img class="d-block " style="height: 570px; width: 100%" src="../assets/img-nike/DEMO720.PNG" alt="https://www.sneakers-actus.fr/wp-content/uploads/2019/03/Nike-Air-Max-720-blanche-White-Pure-Platinum-AO2924-100.jpg"> </div>
          <div class="carousel-item"> <img class="d-block " style="height: 570px; width: 100%" src="../assets/img-nike/DEMOVM2019.PNG" alt="https://www.lesitedelasneaker.com/wp-content/images/2018/12/nike-air-vapormax-19-lsdls-4-1100x619.jpg"> </div>
          <div class="carousel-item"> <img class="d-block " style="height: 570px; width: 100%" src="../assets/img-nike/DEMOVMF2.PNG" alt="https://www.43einhalb.com/files/image/id/172030/w/2000/h/1200/n/nike-air-vapormax-flyknit-2-black-grey-942842-012-mood-1.jpg"> </div>
          <div class="carousel-item"> <img class="d-block " style="height: 570px; width: 100%" src="../assets/img-nike/DEMOVMP.PNG" alt="https://sneakerstudio.fr/fre_pl_Baskets-homme-Nike-Air-Vapormax-Plus-924453-009-15088_3.jpg"> </div>
          <div class="carousel-item"> <img class="d-block " style="height: 570px; width: 100%" src="../assets/img-nike/DEMOTN.PNG" alt="https://images.wave.fr/images//air-max-plus-bq4629-001-tiger-2018-1000x750.jpg"> </div>
          <div class="carousel-item"> <img class="d-block " style="height: 570px; width: 100%" src="../assets/img-nike/DEMOAUM.PNG" alt="http://moresneakers.com/wp-content/uploads/2018/05/afew-store-sneaker-nike-air-more-uptempo-96-white-varsityred-white-314.jpg"> </div>
        </div>
        <ol class="carousel-indicators">
          <li data-target="#carousel1" data-slide-to="0" class="active"> </li>
          <li data-target="#carousel1" data-slide-to="1" class=""> </li>
          <li data-target="#carousel1" data-slide-to="2" class=""> </li>
          <li data-target="#carousel1" data-slide-to="3" class=""> </li>
          <li data-target="#carousel1" data-slide-to="4" class=""> </li>
          <li data-target="#carousel1" data-slide-to="5" class=""> </li>
          <li data-target="#carousel1" data-slide-to="6" class=""> </li>
        </ol>
      </div>
    </div>
  </div>
  <!-- Carousel venue -->
  <!-- Events -->
  <!-- Book section -->
  <!-- Footer -->
  <div class="py-5" style="">
    <div class="container" style="font-size: 12px;">
      <div class="row">
        <div class="text-center mx-auto col-md-12">
          <h1>Tous les modèles de Nike pour enfants</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 p-3">
          <div class="card text-center">
            <div class="card-image" style="background-color: #F5F5F5;">
              <img src="../assets/img-nike/AM270 demo.jpg" class="img-fluid">
            </div>
            <div class="card-header p-3">
              <h3>Air Max 270</h3>
            </div>
            <div class="card-body p-3">
              <p>La chaussure Nike Air Max 270 pour Homme s'inspire de deux icônes Air : la Air Max 180 et la Air Max 93. Elle est dotée de la plus grosse unité d'air au talon jamais utilisée par Nike, pour une foulée ultra-souple qui offre un confort aussi incroyable que son esthétique.</p>
              <a class="btn btn-primary" href="Nike/AM270k.php" draggable="true">Voir les modèles</a>
            </div>
          </div>
        </div>
       <!-- <div class="col-lg-6 p-3">
          <div class="card text-center">
            <div class="card-image">
              <img src="../assets/img-nike/AM720 demo.jpeg" class="img-fluid" height="175px">
            </div>
            <div class="card-header p-3">
              <h3>Air Max 720</h3>
            </div>
            <div class="card-body p-3">
              <p>L'unité Air la plus imposante jamais conçue par Nike vous offre encore plus d'air sous le pied pour un confort époustouflant tout au long de la journée, dans les tribunes comme au quotidien.</p><br>
              <a class="btn btn-primary" href="Nike/AM720.php" draggable="true">Voir les modèles</a>
            </div>
          </div>
        </div>-->
           <div class="col-lg-6 p-3">
            <div class="card text-center">
              <div class="card-image" style="background-color: #F5F5F5;">
                <img src="../assets/img-nike/AM95 demo.jpg" class="img-fluid py-3">
              </div>
              <div class="card-header p-3">
                <h3>Air Max 95</h3>
              </div>
              <div class="card-body p-3">
                <p>La chaussure Nike Air Max 95 pour Homme possède le même style emblématique et le même amorti exceptionnel que le modèle dont elle est inspirée. Sortie en 1995, l'originale a été plébiscitée par les coureurs.</p>
                <a class="btn btn-primary" href="Nike/AM95k.php">Voir les modèles</a>
              </div>
            </div>
          </div>
         <!--<div class="col-lg-6 p-3">
            <div class="card text-center">
              <div class="card-image">
                <img src="../assets/img-nike/AM97 demo.jpg" class="img-fluid">
              </div>
              <div class="card-header p-3">
                <h3>Air Max 97</h3>
              </div>
              <div class="card-body p-3">
                <p>La Nike Air Max 97 rend hommage à la sneaker emblématique en revisitant les détails qui l'ont rendue célèbre : des lignes ondoyantes au passepoil réfléchissant, sans oublier l'amorti Max Air sur toute la longueur.</p>
                <a class="btn btn-primary" href="#">Voir les modèles</a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 p-3">
            <div class="card text-center">
              <div class="card-image">
                <img src="../assets/img-nike/AM98 demo.jpg" class="img-fluid">
              </div>
              <div class="card-header p-3">
                <h3>Air Max 98</h3>
              </div>
              <div class="card-body p-3">
                <p>La Air Max 98 a surfé sur la vague de son célèbre prédécesseur, en se basant sur une unité Air visible sur toute la longueur et des lignes fluides. Elle fait aujourd'hui son retour en arborant le même look emblématique et une nouvelle palette de couleurs.</p>
                <a class="btn btn-primary" href="#">Voir les modèles</a>
              </div>
            </div>
          </div>-->
           <!--<div class="col-lg-6 p-3">
            <div class="card text-center">
              <div class="card-image py-2">
                <img src="../assets/img-nike/AVMP2019 demo.jpg" class="img-fluid">
              </div>
              <div class="card-header p-3">
                <h3>Air Vapormax 2019</h3>
              </div>
              <div class="card-body p-3">
                <p>La Nike Air VaporMax 2019 est recouverte d'un revêtement transparent qui laisse apparaître les épaisseurs internes de la chaussure. L'amorti VaporMax est également transparent pour vous permettre de voir l'air sur lequel repose votre pied. Cette chaussure légère et souple procure une sensation de dynamisme ultime.</p>
                <a class="btn btn-primary" href="Nike/AV19.php">Voir les modèles</a>
              </div>
            </div>
          </div>
         <div class="col-lg-6 p-3">
            <div class="card text-center">
              <div class="card-image">
                <img src="../assets/img-nike/AVMF2 demo.jpg" class="img-fluid">
              </div>
              <div class="card-header p-3">
                <h3>Air Vapormax Flyknit 2</h3>
              </div>
              <div class="card-body p-3">
                <p>La Nike Air VaporMax Flyknit présente un amorti léger et dynamique qui donne l'impression de défier la gravité. Le tissu Flyknit assure une tenue confortable et parfaitement ajustée.</p>
                <a class="btn btn-primary" href="Nike/AVF2.php">Voir les modèles</a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 p-3">
            <div class="card text-center">
              <div class="card-image">
                <img src="../assets/img-nike/AVMF 3 demo.jpg" class="img-fluid">
              </div>
              <div class="card-header p-3">
                <h3>Air Vapormax Flyknit 3</h3>
              </div>
              <div class="card-body p-3">
                <p>La Nike Air VaporMax Flyknit 3 arbore des lignes bicolores fluides sur un tissu Flyknit extensible et aéré pour un style original, prêt à conquérir la rue. La technologie révolutionnaire VaporMax Air donne du ressort à votre foulée avec un amorti sur toute la longueur de la chaussure.</p>
                <a class="btn btn-primary" href="#">Voir les modèles</a>
              </div>
            </div>
          </div>-->
          <div class="col-lg-6 p-3">
            <div class="card text-center">
              <div class="card-image" style="background-color: #F5F5F5;">
                <img src="../assets/img-nike/AVMP demo.jpg" class="img-fluid">
              </div>
              <div class="card-header p-3">
                <h3>Air Vapormax Plus</h3>
              </div>
              <div class="card-body p-3" >
                <p>La Nike Air VaporMax Plus s'inspire du passé pour vous propulser vers l'avenir. Cette nouvelle version rend hommage à la Air Max Plus ultra-technique de 1998 avec une cage flottante, une empeigne avec amorti intégré et un logo au talon. La technologie révolutionnaire VaporMax Air apporte une touche de modernité qui replace ce modèle dans le monde d'aujourd'hui.</p>
                <a class="btn btn-primary" href="Nike/AVMPk.php">Voir les modèles</a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 p-3">
            <div class="card text-center">
              <div class="card-image">
                <img src="../assets/img-nike/AMP TN demo.jpg" class="img-fluid">
              </div>
              <div class="card-header p-3">
                <h3>Air Max Plus</h3>
              </div>
              <div class="card-body p-3">
                <p>Lancée en 1998, la Nike Air Max Plus s'est imposée comme une icône incontournable des années 2000 avec son légendaire amorti « Tuned » Air offrant stabilité, maintien et confort. L'inspiration reste la même : des lignes ondulées évoquant des feuilles de palmiers et l'emblématique queue de baleine sur le bas, le tout dans un coloris dégradé.</p>
                <a class="btn btn-primary" href="Nike/TNk.php">Voir les modèles</a>
              </div>
            </div>
          </div>
         <!-- <div class="col-lg-6 p-3">
            <div class="card text-center">
              <div class="card-image">
                <img src="../assets/img-nike/Air More Uptempo/BULLS.PNG" class="img-fluid">
              </div>
              <div class="card-header p-3">
                <h3>Air More Uptempo</h3>
              </div>
              <div class="card-body p-3">
                <p>La Nike Air More Uptempo donne un look inimitable aux petits pieds avec l'amorti Max Air. L'amorti léger en cuir assure leur confort tout au long de la journée. </p>
                <a class="btn btn-primary" href="Nike/Air More Uptempo.php">Voir les modèles</a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 p-3">
            <div class="card text-center">
              <div class="card-image py-2">
                <img src="../assets/img-nike/AVMF demo.jpg" class="img-fluid">
              </div>
              <div class="card-header p-3">
                <h3>Air Vapormax Flyknit</h3>
              </div>
              <div class="card-body p-3">
                <p>I should be incapable of drawing a single stroke at the present moment.</p>
                <a class="btn btn-primary" href="#">Voir les modèles</a>
              </div>
            </div>
          </div>-->
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
  </body>

  </html>