
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- PAGE settings -->
  <title>%TITLE% - LBM</title>
  <meta name="description" content="Free Bootstrap 4 Pingendo Flat template for restaurant and food">
  <meta name="keywords" content="Pingendo restaurant food flat free template bootstrap 4">
  <!-- CSS dependencies -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="../../flat.css" type="text/css">
  <link rel="stylesheet" href="../../css/style-pg-pdt.css" type="text/css">
  <link rel="stylesheet" href="../../css/cart.css" type="text/css">
  <link rel="stylesheet" href="../../css/filter.css" type="text/css">
  <script data-main="../../js/showmod" src="../../js/require-2.3.6.js"></script>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-md bg-info navbar-light fixed-top">
    <div class="container">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar3SupportedContent" aria-controls="navbar3SupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse text-center justify-content-center" id="navbar3SupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item mx-2">
            <a class="nav-link" href="../../index.php">
              <b>ACCUEIL </b>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> MARQUES </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="../Nike.php">NIKE</a>
              <a class="dropdown-item" href="../Air-Jordan.php">AIR JORDAN</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="../Adidas.php">ADIDAS</a>
              <a class="dropdown-item" href="../Fila.php">FILA</a>
              <a class="dropdown-item" href="../Puma.php">PUMA</a>
              <a class="dropdown-item" href="../vans.php">VANS</a>
            </div>
          </li> 
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> FEMMES </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="../Adidas.php">ADIDAS</a>
              <a class="dropdown-item" href="../Fila.php">FILA</a>
              <a class="dropdown-item" href="../Puma.php">PUMA</a>
            </div>
          </li> 
          <li class="nav-item mx-2">
            <a class="nav-link" href="../Enfants.php">ENFANTS</a>
          </li>           
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> HOMMES </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="../Nike.php">NIKE</a>
              <a class="dropdown-item" href="../Air-Jordan.php">AIR JORDAN</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="../Adidas.php">ADIDAS</a>
              <a class="dropdown-item" href="../Fila.php">FILA</a>
              <a class="dropdown-item" href="../Puma.php">PUMA</a>
            </div>
          </li>
        </ul>
        <div id="cart-info" class="mt-2 nav-info align-items-center cart-info d-flex justify-content-between mx-lg-5">
          <p class="infoc mb-0 text-capitalize">
            <span id="item-count">0</span>&nbsp;Panier

            <!--Votre panier <span class="item-total">0.00</span> € -->
          </p>
        </div>
      </div>
    </div>
  </nav>


  <div id="cart" class="cart showc">
    <div class="text-center" >
      <p class="font-weight-bold text-lead" id="empty_msg">Votre panier est vide !</p>
    </div>
    <div class="cart-total-container d-flex justify-content-around text-capitalize mt-5">
      <h5>total</h5>
      <h5> <strong id="cart-total" class="font-weight-bold">0.00</strong> €</h5>
    </div>
    <div class="cart-buttons-container mt-3 d-flex justify-content-between">
      <a href="" id="clear-cart" class="btn btn-outline-secondary btn-black text-uppercase ">Effacer</a>

      <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" >
        <input type="hidden" name="cmd" value="_s-xclick">
        <input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----">
        <input type="image" src="https://www.paypalobjects.com/fr_FR/FR/i/btn/btn_viewcart_LG.gif" border="0" name="submit" alt="PayPal, le réflexe sécurité pour payer en ligne">
        <img alt="" border="0" src="https://www.paypalobjects.com/fr_FR/i/scr/pixel.gif" width="1" height="1">
      </form>


    </div>
  </div>
</div>