<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- PAGE settings -->
  <link rel="icon" href="https://templates.pingendo.com/assets/Pingendo_favicon.ico">
  <title>The Latest Best Models</title>
  <meta name="description" content="Free Bootstrap 4 Pingendo Flat template for restaurant and food">
  <meta name="keywords" content="Pingendo restaurant food flat free template bootstrap 4">
  <!-- CSS dependencies -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="flat.css" type="text/css">
  <!-- Script: Make my navbar transparent when the document is scrolled to top -->
  <script src="../js/navbar-ontop.js"></script>
  <!-- Script: Animated entrance -->
  <script src="../js/animate-in.js"></script>
  <script src="../js/appcart.js"></script>

  <script>
    $(document).ready(function(){
      var $n = $(".qty");
      $n.hide();
      $(".addPanier").click(function(){
        $n.show();
        $n.val(Number($n.val())+1);
      });
      $n.css("display", "block");
      $n.css("position", "absolute");
      $n.css("z-index", "1");
      $n.css("top", "0");
      $n.css("border", "none");
      $n.css("background", "none");
      $n.css("color", "lightgrey");
      $n.css("width", "auto");
    });
  </script>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-md bg-primary navbar-light fixed-top" >
    <div class="container" >
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar3SupportedContent" aria-controls="navbar3SupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse text-center justify-content-center" id="navbar3SupportedContent" >
        <ul class="navbar-nav" >
          <li class="nav-item mx-2">
            <a class="nav-link" href="index.php">
              <b style="color: white;">ACCUEIL </b>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;"> MARQUES</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="marques/Nike.php">NIKE</a>
              <a class="dropdown-item" href="marques/Air-Jordan.php">AIR JORDAN</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="marques/Adidas.php">ADIDAS</a>
              <a class="dropdown-item" href="marques/Fila.php">FILA</a>
              <a class="dropdown-item" href="marques/Puma.php">PUMA</a>
              <a class="dropdown-item" href="marques/vans.php">VANS</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> FEMMES </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="marques/Adidas.php">ADIDAS</a>
              <a class="dropdown-item" href="marques/Fila.php">FILA</a>
              <a class="dropdown-item" href="marques/Puma.php">PUMA</a>
            </div>
          </li> 
          <li class="nav-item mx-2">
            <a class="nav-link" href="../marques/Enfants.php">ENFANTS</a>
          </li>           <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> HOMMES </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="marques/Nike.php">NIKE</a>
              <a class="dropdown-item" href="marques/Air-Jordan.php">AIR JORDAN</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="marques/Adidas.php">ADIDAS</a>
              <a class="dropdown-item" href="marques/Fila.php">FILA</a>
              <a class="dropdown-item" href="marques/Puma.php">PUMA</a>
            </div>
          </li> 
        </ul>
           


      </div>
    </div>
  </nav>

