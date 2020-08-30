
<!-- Footer -->
<div class="text-center bg-dark pt-3">
  <div class="container">
    <div class="row">
      <div class="col-md-4 p-3">
        <h2 class="mb-4">Contact</h2>
        <p class="m-0">
          <a href="tel:+33 - 751338928" class="text-white">+33 - 751338928</a>
        </p>
        <p>
          <a href="mailto:latestbestmodels@gmail.com" class="text-white">latestbestmodels@gmail.com</a>
        </p>
      </div>
      <div class="row">
        <div class="col-md-12 mt-3">
          <a href="">Voir le conditions générales de vente</a>
          <p class="text-center text-muted">© Copyright 2019 LBM Express - All rights reserved. </p>
        </div>
      </div>
    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <script>
    var basename = <?php echo json_encode($path); ?>
  </script>
    <!-- Script: Make my navbar transparent when the document is scrolled to top -->
  <!-- Script: Animated entrance -->

  <script>
    require(['config'], function(){
      require(['js/animate-in','js/jquery.simple-text-rotator','js/appcart','js/navbar-ontop','js/smooth-scroll']);
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
        $(".rotate").textrotator({
          animation: "flip", // You can pick the way it animates when rotating through words. Options are dissolve (default), fade, flip, flipUp, flipCube, flipCubeUp and spin.
          separator: "|", // If you don't want commas to be the separator, you can define a new separator (|, &, * etc.) by yourself using this field.
          speed: 3000 // How many milliseconds until the next word show.
        });
      });
      
    });
</body>

</html>