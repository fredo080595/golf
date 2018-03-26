
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="msapplication-tap-highlight" content="no">
        <meta name="description" content="Materialize is a modern responsive CSS framework based on Material Design by Google. ">
        <link rel="stylesheet" type="text/css" href="css/materialize.min.css">
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/materialize.min.js"></script>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body class="black">

      <?php include "navbar.php"; ?>
      <div>
        <nav class="nav-extended blue darken-4 ">
            <div class="nav-content container navbar-fixed">
                <ul class="tabs tabs-transparent tabs-fixed-width">
                    <li class="tab"><a class="active" href="#test1">HOME</a></li>
                    <li class="tab"><a href="#test2">EMPRESA</a></li>
                    <li class="tab"><a href="#test3">SERVICIOS</a></li>
                    <li class="tab"><a href="#test4">GALERÍA</a></li>
                    <li class="tab"><a href="#test5">CATÁLOGO</a></li>
                    <li class="tab"><a href="#test6">CONTACTO</a></li>
                    
                </ul>
            </div>

        </nav>
        </div>
        <div id="test1" class="col s12"> 
            <?php include "home.php"; ?> 
        </div>
        <div id="test2" class="col s12">
            <?php include "empresa.php";?>
        </div>
        <div id="test3" class="col s12">
            <?php include "servicio.php";?>
        </div>
        <div id="test4" class="col s12">
            <?php include "galeria.php";?>
        </div>
        <div id="test5" class="col s12">
          
         <?php include "catalogo.php"; ?>

          </div>
        <div id="test6" class="col s12">
            <?php include "contacto.php"; ?>
        </div>
        <?php include "barra_contacto.php"; ?>
        <?php include "footer.php"; ?>
        <script>
            $(document).ready(function(){
             $('.parallax').parallax();
             $('.carousel').carousel();
             $('.carousel.carousel-slider').carousel();
             $('.button-collapse').sideNav();
             $('.slider').slider({
               indicators:true,
               fullWidth: true,
            
             });
            });
               
        </script>


    
       
    </body>
</html>