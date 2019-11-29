<?php
    ob_Start();
    include("../../includes/header_catalogue.php");
    $buffer=ob_get_contents();
    ob_end_clean();

    $buffer=str_replace("%TITLE%","Adidas Originals",$buffer);
    echo $buffer;
?>
<div class="py-5 mb-0">
    <!-- SideBar -->
    <?php include("../../includes/filter.php"); ?>
  <div class="container main">
    <div class="row jumbotron ">
      <div class="col-md-12 ">
        <h1 class="text-center display-3" id="jumbo-title"> Adidas Originals</h1>
      </div>
      <div class="col-md-12 text-center">
        <a href="../../index.php">Accueil &gt;&gt; </a>
        <a href="../Puma.php" class="text-dark">Nos modèles Adidas Originals &gt;&gt; </a>
        <a href="Originals.php">Adidas Originals &gt;&gt;</a>
      </div>
    </div>
    <!-- Gallery -->
    <!-- Page Features -->
    <div class="container"> 
      <div class="row text-center store-items" id="all-card">
        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 mb-4 card-group">
          <div class="card store-item">
            <img class="card-img-top store-img" src="../../assets/img-adidas/ORIGINALS/STANSMITH/BLACK.PNG" alt="">
            <div class="card-body">
              <h4 class="card-title store-item-name">STAN SMITH BLACK <br>Ref/ OSS2340976</h4>
              <p class="card-text">Prix: <strong id="store-item-price">175,50</strong>€</p>
            </div>
            <div class="card-footer">
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="hosted_button_id" value="2LF9AXJVHK5JG">
                <table>
                  <tr><td><input type="hidden" name="on0" value="Taille">Taille</td></tr><tr><td><select name="os0">
                    <option value="40">40 </option>
                    <option value="41">41 </option>
                    <option value="42">42 </option>
                    <option value="43">43 </option>
                    <option value="44">44 </option>
                    <option value="45">45 </option>
                  </select> </td></tr>
                </table>
                <input type="image" class="addPanier" src="https://www.paypalobjects.com/fr_FR/FR/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal, le réflexe sécurité pour payer en ligne">
                <img alt="" border="0" src="https://www.paypalobjects.com/fr_FR/i/scr/pixel.gif" width="1" height="1">
              </form>

            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 mb-4 card-group">
          <div class="card store-item">
            <img class="card-img-top store-img" src="../../assets/img-adidas/ORIGINALS/STANSMITH/GOLD.PNG" alt="">
            <div class="card-body">
              <h4 class="card-title store-item-name">STAN SMITH GOLD <br>Ref/ OSS5467787</h4>
              <p class="card-text">Prix: <strong id="store-item-price">175,50</strong>€</p>
            </div>
            <div class="card-footer">
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="hosted_button_id" value="2LF9AXJVHK5JG">
                <table>
                  <tr><td><input type="hidden" name="on0" value="Taille">Taille</td></tr><tr><td><select name="os0">
                    <option value="40">40 </option>
                    <option value="41">41 </option>
                    <option value="42">42 </option>
                    <option value="43">43 </option>
                    <option value="44">44 </option>
                    <option value="45">45 </option>
                  </select> </td></tr>
                </table>
                <input type="image" class="addPanier" src="https://www.paypalobjects.com/fr_FR/FR/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal, le réflexe sécurité pour payer en ligne">
                <img alt="" border="0" src="https://www.paypalobjects.com/fr_FR/i/scr/pixel.gif" width="1" height="1">
              </form>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 mb-4 card-group">
          <div class="card store-item">
            <img class="card-img-top store-img" src="../../assets/img-adidas/ORIGINALS/STANSMITH/BW.PNG" alt="">
            <div class="card-body">
              <h4 class="card-title store-item-name">STAN SMITH BLACK WHITE <br>Ref/ OSS0932478</h4>
              <p class="card-text">Prix: <strong id="store-item-price">175,50</strong>€</p>
            </div>
            <div class="card-footer">
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="hosted_button_id" value="2LF9AXJVHK5JG">
                <table>
                  <tr><td><input type="hidden" name="on0" value="Taille">Taille</td></tr><tr><td><select name="os0">
                    <option value="40">40 </option>
                    <option value="41">41 </option>
                    <option value="42">42 </option>
                    <option value="43">43 </option>
                    <option value="44">44 </option>
                    <option value="45">45 </option>
                  </select> </td></tr>
                </table>
                <input type="image" class="addPanier" src="https://www.paypalobjects.com/fr_FR/FR/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal, le réflexe sécurité pour payer en ligne">
                <img alt="" border="0" src="https://www.paypalobjects.com/fr_FR/i/scr/pixel.gif" width="1" height="1">
              </form>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 mb-4 card-group">
          <div class="card store-item">
            <img class="card-img-top store-img" src="../../assets/img-adidas/ORIGINALS/STANSMITH/WPINK.PNG" alt="">
            <div class="card-body">
              <h4 class="card-title store-item-name">STAN SMITH WHITE PINK <br>Ref/ OSS3297904</h4>
              <p class="card-text">Prix: <strong id="store-item-price">175,50</strong>€</p>
            </div>
            <div class="card-footer">
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="hosted_button_id" value="2LF9AXJVHK5JG">
                <table>
                  <tr><td><input type="hidden" name="on0" value="Taille">Taille</td></tr><tr><td><select name="os0">
                    <option value="40">40 </option>
                    <option value="41">41 </option>
                    <option value="42">42 </option>
                    <option value="43">43 </option>
                    <option value="44">44 </option>
                    <option value="45">45 </option>
                  </select> </td></tr>
                </table>
                <input type="image" class="addPanier" src="https://www.paypalobjects.com/fr_FR/FR/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal, le réflexe sécurité pour payer en ligne">
                <img alt="" border="0" src="https://www.paypalobjects.com/fr_FR/i/scr/pixel.gif" width="1" height="1">
              </form>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 mb-4 card-group">
          <div class="card store-item">
            <img class="card-img-top store-img" src="../../assets/img-adidas/ORIGINALS/STANSMITH/WG.PNG" alt="">
            <div class="card-body">
              <h4 class="card-title store-item-name">STAN SMITH WHITE GREEN <br>Ref/ OSS9871649</h4>
              <p class="card-text">Prix: <strong id="store-item-price">175,50</strong>€</p>
            </div>
            <div class="card-footer">
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="hosted_button_id" value="2LF9AXJVHK5JG">
                <table>
                  <tr><td><input type="hidden" name="on0" value="Taille">Taille</td></tr><tr><td><select name="os0">
                    <option value="40">40 </option>
                    <option value="41">41 </option>
                    <option value="42">42 </option>
                    <option value="43">43 </option>
                    <option value="44">44 </option>
                    <option value="45">45 </option>
                  </select> </td></tr>
                </table>
                <input type="image" class="addPanier" src="https://www.paypalobjects.com/fr_FR/FR/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal, le réflexe sécurité pour payer en ligne">
                <img alt="" border="0" src="https://www.paypalobjects.com/fr_FR/i/scr/pixel.gif" width="1" height="1">
              </form>

            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 mb-4 card-group">
          <div class="card store-item">
            <img class="card-img-top store-img" src="../../assets/img-adidas/ORIGINALS/STANSMITH/BLUE.PNG" alt="">
            <div class="card-body">
              <h4 class="card-title store-item-name">STAN SMITH WHITE BLUE <br>Ref/ OSS9871649</h4>
              <p class="card-text">Prix: <strong id="store-item-price">175,50</strong>€</p>
            </div>
            <div class="card-footer">
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="hosted_button_id" value="2LF9AXJVHK5JG">
                <table>
                  <tr><td><input type="hidden" name="on0" value="Taille">Taille</td></tr><tr><td><select name="os0">
                    <option value="40">40 </option>
                    <option value="41">41 </option>
                    <option value="42">42 </option>
                    <option value="43">43 </option>
                    <option value="44">44 </option>
                    <option value="45">45 </option>
                  </select> </td></tr>
                </table>
                <input type="image" class="addPanier" src="https://www.paypalobjects.com/fr_FR/FR/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal, le réflexe sécurité pour payer en ligne">
                <img alt="" border="0" src="https://www.paypalobjects.com/fr_FR/i/scr/pixel.gif" width="1" height="1">
              </form>

            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 mb-4 card-group">
          <div class="card store-item">
            <img class="card-img-top store-img" src="../../assets/img-adidas/ORIGINALS/SUPERSTAR/BLACK.PNG" alt="">
            <div class="card-body">
              <h4 class="card-title store-item-name">SUPERSTAR FOUNDATION BLACK <br>Ref/ OST5482903</h4>
              <p class="card-text">Prix: <strong id="store-item-price">175,50</strong>€</p>
            </div>
            <div class="card-footer"><form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="hosted_button_id" value="2LF9AXJVHK5JG">
                <table>
                  <tr><td><input type="hidden" name="on0" value="Taille">Taille</td></tr><tr><td><select name="os0">
                    <option value="40">40 </option>
                    <option value="41">41 </option>
                    <option value="42">42 </option>
                    <option value="43">43 </option>
                    <option value="44">44 </option>
                    <option value="45">45 </option>
                  </select> </td></tr>
                </table>
                <input type="image" class="addPanier" src="https://www.paypalobjects.com/fr_FR/FR/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal, le réflexe sécurité pour payer en ligne">
                <img alt="" border="0" src="https://www.paypalobjects.com/fr_FR/i/scr/pixel.gif" width="1" height="1">
              </form>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 mb-4 card-group">
          <div class="card store-item">
            <img class="card-img-top store-img" src="../../assets/img-adidas/ORIGINALS/SUPERSTAR/WHITE.PNG" alt="">
            <div class="card-body">
              <h4 class="card-title store-item-name">SUPERSTAR FOUNDATION WHITE <br>Ref/ OST0917736</h4>
              <p class="card-text">Prix: <strong id="store-item-price">175,50</strong>€</p>
            </div>
            <div class="card-footer">
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="hosted_button_id" value="2LF9AXJVHK5JG">
                <table>
                  <tr><td><input type="hidden" name="on0" value="Taille">Taille</td></tr><tr><td><select name="os0">
                    <option value="40">40 </option>
                    <option value="41">41 </option>
                    <option value="42">42 </option>
                    <option value="43">43 </option>
                    <option value="44">44 </option>
                    <option value="45">45 </option>
                  </select> </td></tr>
                </table>
                <input type="image" class="addPanier" src="https://www.paypalobjects.com/fr_FR/FR/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal, le réflexe sécurité pour payer en ligne">
                <img alt="" border="0" src="https://www.paypalobjects.com/fr_FR/i/scr/pixel.gif" width="1" height="1">
              </form>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 mb-4 card-group">
          <div class="card store-item">
            <img class="card-img-top store-img" src="../../assets/img-adidas/ORIGINALS/SUPERSTAR/GOLD.PNG" alt="">
            <div class="card-body">
              <h4 class="card-title store-item-name">SUPERSTAR GOLD<br>Ref/ OST0199205</h4>
              <p class="card-text">Prix: <strong id="store-item-price">175,50</strong>€</p>
            </div>
            <div class="card-footer">
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="hosted_button_id" value="2LF9AXJVHK5JG">
                <table>
                  <tr><td><input type="hidden" name="on0" value="Taille">Taille</td></tr><tr><td><select name="os0">
                    <option value="40">40 </option>
                    <option value="41">41 </option>
                    <option value="42">42 </option>
                    <option value="43">43 </option>
                    <option value="44">44 </option>
                    <option value="45">45 </option>
                  </select> </td></tr>
                </table>
                <input type="image" class="addPanier" src="https://www.paypalobjects.com/fr_FR/FR/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal, le réflexe sécurité pour payer en ligne">
                <img alt="" border="0" src="https://www.paypalobjects.com/fr_FR/i/scr/pixel.gif" width="1" height="1">
              </form>
            </div>
          </div>
        </div><div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 mb-4 card-group">
          <div class="card store-item">
            <img class="card-img-top store-img" src="../../assets/img-adidas/ORIGINALS/SUPERSTAR/PRIDE PACK.PNG" alt="">
            <div class="card-body">
              <h4 class="card-title store-item-name">SUPERSTAR PRIDE PACK <br>Ref/ OST0306805</h4>
              <p class="card-text">Prix: <strong id="store-item-price">175,50</strong>€</p>
            </div>
            <div class="card-footer">
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="hosted_button_id" value="2LF9AXJVHK5JG">
                <table>
                  <tr><td><input type="hidden" name="on0" value="Taille">Taille</td></tr><tr><td><select name="os0">
                    <option value="40">40 </option>
                    <option value="41">41 </option>
                    <option value="42">42 </option>
                    <option value="43">43 </option>
                    <option value="44">44 </option>
                    <option value="45">45 </option>
                  </select> </td></tr>
                </table>
                <input type="image" class="addPanier" src="https://www.paypalobjects.com/fr_FR/FR/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal, le réflexe sécurité pour payer en ligne">
                <img alt="" border="0" src="https://www.paypalobjects.com/fr_FR/i/scr/pixel.gif" width="1" height="1">
              </form>

            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 mb-4 card-group">
          <div class="card store-item">
            <img class="card-img-top store-img" src="../../assets/img-adidas/ORIGINALS/SUPERSTAR/IRIDESCENT.PNG" alt="">
            <div class="card-body">
              <h4 class="card-title store-item-name">SUPERSTAR IRIDESCENT <br>Ref/ OST9278538</h4>
              <p class="card-text">Prix: <strong id="store-item-price">175,50</strong>€</p>
            </div>
            <div class="card-footer"><form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="hosted_button_id" value="2LF9AXJVHK5JG">
                <table>
                  <tr><td><input type="hidden" name="on0" value="Taille">Taille</td></tr><tr><td><select name="os0">
                    <option value="40">40 </option>
                    <option value="41">41 </option>
                    <option value="42">42 </option>
                    <option value="43">43 </option>
                    <option value="44">44 </option>
                    <option value="45">45 </option>
                  </select> </td></tr>
                </table>
                <input type="image" class="addPanier" src="https://www.paypalobjects.com/fr_FR/FR/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal, le réflexe sécurité pour payer en ligne">
                <img alt="" border="0" src="https://www.paypalobjects.com/fr_FR/i/scr/pixel.gif" width="1" height="1">
              </form>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 mb-4 card-group">
          <div class="card store-item">
            <img class="card-img-top store-img" src="../../assets/img-adidas/ORIGINALS/SUPERSTAR/DELUXE RED.PNG" alt="">
            <div class="card-body">
              <h4 class="card-title store-item-name">SUPERSTAR DELUXE RED <br>Ref/ OST8164041</h4>
              <p class="card-text">Prix: <strong id="store-item-price">175,50</strong>€</p>
            </div>
            <div class="card-footer">
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="hosted_button_id" value="2LF9AXJVHK5JG">
                <table>
                  <tr><td><input type="hidden" name="on0" value="Taille">Taille</td></tr><tr><td><select name="os0">
                    <option value="40">40 </option>
                    <option value="41">41 </option>
                    <option value="42">42 </option>
                    <option value="43">43 </option>
                    <option value="44">44 </option>
                    <option value="45">45 </option>
                  </select> </td></tr>
                </table>
                <input type="image" class="addPanier" src="https://www.paypalobjects.com/fr_FR/FR/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal, le réflexe sécurité pour payer en ligne">
                <img alt="" border="0" src="https://www.paypalobjects.com/fr_FR/i/scr/pixel.gif" width="1" height="1">
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->
    </div>



  </div>
</div>
<!-- Menu -->
<!-- Carousel reviews -->
<!-- Carousel venue -->
<!-- Events -->
<!-- Book section -->
<?php   include '../../includes/footer.php'; ?>