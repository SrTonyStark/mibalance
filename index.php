<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, shrink-to-fit=no">
        <title>miBalance</title>

        <link href="css/almacen.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>        
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" 
              integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </head>
    
    
    <body>
        
        <div class="container-fluid encabezado"> 
            <!--BARRA DE NAVEGACIÓN-->
            <nav class="row navbar navbar-expand-sm navbar-light stickytop">                
                <a class="col-4" href="index.php"><img id="logo" src="img/worker-loading-boxes blue.png"></a>
                <div class="col-4 eslogan" align="center"><h2>Almacenes SosiosSL</h2></div>                
                <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarMenu">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a id="perfil" class="nav-link" >Cuenta</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">Salir</a>
                        </li>

                    </ul>
                </div>                
            </nav>
        </div>
        
        
    <div class="container-fluid contenido" id="principal">
            <?php
            //Comprueba si la sesión está empezada.
            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }
            //Si la variable de sesión no existe lanza el javascript del login
            if (!isset($_SESSION['nombreUsuario'])) {
                echo "
                <script type=\"text/javascript\">
                $('#principal').load('loginDesign.php');
                </script>
                ";
            } else {
                echo "
                <script type=\"text/javascript\">
                $('#principal').load('almacenDesign.php');
                </script>
                ";
            }
            ?>
        </div>
    
    
    <!--Footer-->
        <footer class="container-fluid text-center foot">

            <div class="copyrights">
                <br>
                <p class="white-txt">Almacén Sosios SL ® 2018
                    <br>
                    <img class="footimg" src="img/worker-loading-boxes blanco.png" alt="Logo">
                </p>
            </div>
        </footer>
        <!--Footer-->
        
    </body>
        
    <script>
        $('#perfil').click(function () {        
        $('#principal').load('perfilDesign.php', {
            
        });
    });
    </script>
</html>
