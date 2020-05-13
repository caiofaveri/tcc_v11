<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7"><![endif]-->
<!--[if IE 8]><html class="ie ie8"><![endif]-->
<!--[if IE 9]><html class="ie ie9"><![endif]-->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link href="favicon.png" rel="icon">
    <meta name="author" content="Nghia Minh Luong">
    <meta name="keywords" content="Default Description">
    <meta name="description" content="Default keyword">
    <title>Rio Grande</title>
    <!-- Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Archivo+Narrow:300,400,700%7CMontserrat:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="plugins/ps-icon/style.css">
    <!-- CSS Library-->
    <link rel="stylesheet" href="plugins/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/owl-carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css">
    <link rel="stylesheet" href="plugins/slick/slick/slick.css">
    <link rel="stylesheet" href="plugins/bootstrap-select/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="plugins/Magnific-Popup/dist/magnific-popup.css">
    <link rel="stylesheet" href="plugins/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="plugins/revolution/css/settings.css">
    <link rel="stylesheet" href="plugins/revolution/css/layers.css">
    <link rel="stylesheet" href="plugins/revolution/css/navigation.css">
    <!-- Custom-->
    <link rel="stylesheet" href="css/style.css">
    <!--HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--WARNING: Respond.js doesn't work if you view the page via file://-->
    <!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <!--[if IE 7]><body class="ie7 lt-ie8 lt-ie9 lt-ie10"><![endif]-->
  <!--[if IE 8]><body class="ie8 lt-ie9 lt-ie10"><![endif]-->
  <!--[if IE 9]><body class="ie9 lt-ie10"><![endif]-->
  <body class="ps-loading">
    <div class="header--sidebar"></div>
    <header class="header">
      <div class="header__top">
        <div class="container-fluid">
          <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-6 col-xs-12 ">
                  <p>Rua Vicente Rodrigues, 322-556 - Jardim Bom Retiro (Nova Veneza), Sumaré - SP, 13181-654</p>
                </div>
                <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12 ">
                  <div class="header__actions"><a href="login.php">Login</a>
                    <!--<div class="btn-group ps-dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">USD<i class="fa fa-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="#"><img src="images/flag/usa.svg" alt=""> USD</a></li>
                        <li><a href="#"><img src="images/flag/singapore.svg" alt=""> SGD</a></li>
                        <li><a href="#"><img src="images/flag/japan.svg" alt=""> JPN</a></li>
                      </ul>
                    </div>
                    <div class="btn-group ps-dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Language<i class="fa fa-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="#">English</a></li>
                        <li><a href="#">Japanese</a></li>
                        <li><a href="#">Chinese</a></li>
                      </ul>
                    </div>-->
                  </div>
                </div>
          </div>
        </div>
      </div>
      <nav class="navigation">
        <div class="container-fluid">
          <div class="navigation__column left">
            <div class="header__logo"><a class="ps-logo" href="index_loja.php"><img src="images/logoriogrande.png" alt="" width="75px"></a></div>
          </div>
          <div class="navigation__column center">
                <ul class="main-menu menu">
                  <li class="menu-item"><a href="index_loja.php">Home</a>
                       
                  </li>

                  <?php
                  require("backend/connectionbd.php");

                  $query = "SELECT fk_categoria FROM produto";

                  $resultado = mysqli_query($link, $query);
            
                  $dados = mysqli_fetch_array($resultado);

                  $query_categoria = "SELECT * FROM categoria";

                  $resultado_categoria = mysqli_query($link, $query_categoria);
                  ?>
                  <li class="menu-item menu-item-has-children has-mega-menu"><a href="">Loja</a>
                    <div class="mega-menu">
                      <div class="mega-wrap">
                        <div class="mega-column">
                          <h4 class="mega-heading">Categorias</h4>
                          <ul class="mega-item">
                            <?php
                              while($dados_categoria = mysqli_fetch_array($resultado_categoria)) {
                                $categoria_id = $dados_categoria['id'];
                                echo "
                                  <li><a href='product-listing.php?fkcategoria=$categoria_id'>".$dados_categoria['nome_categoria']."</a></li>
                                ";
                              }
                            ?>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </li>

                  <li class="menu-item menu-item-has-children has-mega-menu"><a href="#">Atacado</a>
                    <div class="mega-menu">
                      <div class="mega-wrap">
                        <div class="mega-column">
                          <ul class="mega-item mega-features">
                            <li><a href="product-listing.php">NEW RELEASES</a></li>
                            <li><a href="product-listing.php">FEATURES SHOES</a></li>
                            <li><a href="product-listing.php">BEST SELLERS</a></li>
                            <li><a href="product-listing.php">NOW TRENDING</a></li>
                            <li><a href="product-listing.php">SUMMER ESSENTIALS</a></li>
                            <li><a href="product-listing.php">MOTHER'S DAY COLLECTION</a></li>
                            <li><a href="product-listing.php">FAN GEAR</a></li>
                          </ul>
                        </div>
                        <div class="mega-column">
                          <h4 class="mega-heading">Casa</h4>
                          <ul class="mega-item">
                            <li><a href="product-listing.php">Lixos</a></li>
                            <li><a href="product-listing.php">Panos</a></li>
                            <li><a href="product-listing.php">Vassouras</a></li>
                          </ul>
                        </div>
                        <div class="mega-column">
                          <h4 class="mega-heading">Piscina</h4>
                          <ul class="mega-item">
                            <li><a href="product-listing.php">Cloro</a></li>
                          </ul>
                        </div>
                        <div class="mega-column">
                          <h4 class="mega-heading">Acessórios</h4>
                          <ul class="mega-item">
                            <li><a href="product-listing.php">Vassouras</a></li>
                            <li><a href="product-listing.php">Panos</a></li>
                            <li><a href="product-listing.php">Lixos</a></li>
                          </ul>
                        </div>
                        <div class="mega-column">
                          <h4 class="mega-heading">BRAND</h4>
                          <ul class="mega-item">
                            <li><a href="product-listing.php">NIKE</a></li>
                            <li><a href="product-listing.php">Adidas</a></li>
                            <li><a href="product-listing.php">Dior</a></li>
                            <li><a href="product-listing.php">B&G</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </li>

                  <li class="menu-item"><a href="contact-us-2.php">Contato</a>
                  
                  </li>
                </ul>
          </div>
          <div class="navigation__column right">
          
            <div class="menu-toggle"><span></span></div>
          </div>
        </div>
      </nav>
    </header>
    <script type="text/javascript" src="plugins/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="plugins/bootstrap/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="plugins/jquery-bar-rating/dist/jquery.barrating.min.js"></script>
    <script type="text/javascript" src="plugins/owl-carousel/owl.carousel.min.js"></script>
    <script type="text/javascript" src="plugins/gmap3.min.js"></script>
    <script type="text/javascript" src="plugins/imagesloaded.pkgd.js"></script>
    <script type="text/javascript" src="plugins/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="plugins/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="plugins/jquery.matchHeight-min.js"></script>
    <script type="text/javascript" src="plugins/slick/slick/slick.min.js"></script>
    <script type="text/javascript" src="plugins/elevatezoom/jquery.elevatezoom.js"></script>
    <script type="text/javascript" src="plugins/Magnific-Popup/dist/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAx39JFH5nhxze1ZydH-Kl8xXM3OK4fvcg&amp;region=GB"></script><script type="text/javascript" src="plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <!-- Custom scripts-->
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>