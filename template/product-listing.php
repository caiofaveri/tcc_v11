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
    <title>Produtos</title>
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
    <?php
    require("menu.php");
    ?>

    <main class="ps-main">
    <div class='ps-products-wrap pt-80 pb-80'>
      <div class='ps-products' data-mh='product-listing'>
        <div class='ps-product__columns'>
      
            <?php
            require("backend/connectionbd.php");

            $categoria_id = $_GET['fkcategoria'];
            $query = "SELECT * FROM produto WHERE fk_categoria = $categoria_id ORDER BY id ASC";
            $busca = mysqli_query($link, $query);

            while($dados = mysqli_fetch_array($busca)) {
                $id = $dados['id'];
                echo" 
                
                  <div class='ps-product__column'>
                    <div class='ps-shoe mb-30'>
                      <div class='ps-shoe__thumbnail'><img src='data:image/jpeg;base64,".base64_encode($dados['imagem_produto'])."' alt='' width='200px'><a class='ps-shoe__overlay' href='product-detail.php?id=$id'></a>
                        </div>
                        <div class='ps-shoe__content'>
                          <div class='ps-shoe__variants'>
                            <div class='ps-shoe__variant normal'><img src='#' alt='' width='50px'></div>
                          </div>
                          <div class='ps-shoe__detail'><a class='ps-shoe__name' href='product-detail.php?id=$id'>".$dados['nome_produto']."</a>
                            <p class='ps-shoe__categories'><a href='#'>".$dados['descricao_produto']."</a></p><span class='ps-shoe__price'>  R$ ".$dados['preco_produto']."</span>
                          </div>
                        </div>
                      </div>
                    </div>
                ";
              }
            ?>
        </div>
          <div class='ps-product-action'>
                <div class='ps-pagination'>
                  <ul class='pagination'>
                    <li><a href='#'><i class='fa fa-angle-left'></i></a></li>
                    <li class='active'><a href='#'>1</a></li>
                    <li><a href='#'>2</a></li>
                    <li><a href='#'>3</a></li>
                    <li><a href='#'>...</a></li>
                    <li><a href='#'><i class='fa fa-angle-right'></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class='ps-sidebar' data-mh='product-listing'>
              <aside class='ps-widget--sidebar ps-widget--category'>
                <div class='ps-widget__header'>
                  <h3>Categorias</h3>
                </div>
                <div class='ps-widget__content'>
                  <ul class='ps-list'>
                    
                    <?php
                    require("backend/connectionbd.php");

                    $query_cat = "SELECT fk_categoria FROM produto";
  
                    $resultado = mysqli_query($link, $query_cat);
              
                    $dados = mysqli_fetch_array($resultado);
  
                    $query_categoria = "SELECT * FROM categoria";
  
                    $resultado_categoria = mysqli_query($link, $query_categoria);
                    while($dados_categoria = mysqli_fetch_array($resultado_categoria)) {
                      $categoria_id = $dados_categoria['id'];
                      echo "
                        <li><a href='product-listing.php?fkcategoria=$categoria_id'>".$dados_categoria['nome_categoria']."</a></li></br>
                      ";
                    }
                  ?>
                  </ul>
                </div>
              </aside>
             
             
              <div class='ps-sticky desktop'>
             
               
              </div>
    
            </div>
          </div>
         

    
     <?php 
     require("footer.php");
     ?>
    </main>
    <!-- JS Library-->
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