<!doctype html>
<html lang=''>
   <head>
      <meta charset='utf-8'>
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="css/stylesmenu.css">
      <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
      <link rel="stylesheet" type="text/css" href="css/nav.css">
      <script type="text/javascript" src="js/jquery-2.1.1.js"></script>
      <script type="text/javascript" src="js/bootstrap.min.js"></script>
      <script type="text/javascript" src="js/bootstrap.js"></script>
      <script type="text/javascript" src="js/menu.js"></script>
      <script type="text/javascript" src="js/slide.js"></script>
      <script type="text/javascript" src="js/loggin.js"></script>
      <title>ClinicalFree</title>
   </head>
   <body>
      <div class="container">
         <div class="row">
            <img src="img/banner.png" class="img-responsive">
         </div>
         <br>
         <nav class="navbar navbar-default">
            <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
               <span class="sr-only">Cambiar Navegacion</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </button>
               <a href="#" class="navbar-brand"><img id="logo" src="img/logo.png"></a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
               <ul class="nav navbar-nav">
                  <li class="active"><a href='#' class='mostrar'>Inicio</a>
                  </li>
                  <li class="dropdown">
                     <a href='#' class="dropdown-toggle" data-toggle="dropdown">Acerca de<b class="caret"></b></a>
                     <ul class="dropdown-menu">
                        <li><a href='#' class='mostrar'>Quienes somos</a></li>
                        <li><a href='#' class='mostrar'>Contactanos</a></li>
                     </ul>
                  </li>
               </ul>
            </div>
         </nav>
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-4">
                  <div class="panel panel-default">
                     <div class="panel-body">
                        <div class="form-group">
                           <label for="">Usuario:</label>
                           <input id="txtUsuario" name="txtUsuario" class="form-control" placeholder="Nombre de usuario">
                        </div>
                        <div class="form-group">
                           <label for="">Contraseña:</label>
                           <input id="txtContraseña" name="txtContraseña" type="password" class="form-control" placeholder="Contraseña">
                        </div>
                        <div id="fallo" class="alert alert-warning"></div>
                        <button name="btnIngresar" id="btnIngresar" class="btn btn-success">Iniciar Sesión</button>
                     </div>
                  </div>
               </div>
               <div class="col-md-2">
               </div>
               <div class="col-md-6">
                  <?php include('slide.html'); ?>
               </div>
            </div>
         </div>
      </div>
      <footer>
         <div class="container">
            <div class="row">
               <img src="img/footer.png" class="img-responsive">
            </div>
         </div>
      </footer>
   </body>
</html>