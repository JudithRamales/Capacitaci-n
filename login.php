<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Login</title>

        <!-- CSS FILES -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100;300;400;600;700&display=swap" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-icons.css" rel="stylesheet">
        <link href="css/owl.carousel.min.css" rel="stylesheet">
        <link href="css/owl.theme.default.min.css" rel="stylesheet">
        <link href="css/tooplate-gotto-job.css" rel="stylesheet">
        <link href="css/index.css" rel="stylesheet">

    </head>

    <!-- Header -->
    <?php
         include 'header1.php';
    ?>

<style>
        .hero-section {
            background-color: #142e61ff; /* Cambia el color de fondo a azul (#007bff) o tu preferencia */
            color: #fff; /* Cambia el color del texto en la sección hero-section */
            height: 575px;
        }

        .custom-form {
            background-color: #5c6a87ff; /* Cambia el color de fondo del formulario a azul (#007bff) o tu preferencia */
            color: #fff; /* Cambia el color del texto en el formulario */
            border-radius: 8px; /* Añade un borde redondeado para estilizar el formulario */
            padding: 20px; /* Añade un relleno para que el contenido no toque los bordes del formulario */
        }

        .bi {
            color: #fff; /* Cambia el color de los iconos Bootstrap a blanco o tu preferencia */
        }

        /* Agrega cualquier otro estilo que necesites */

    </style>
    
    <body>

      <main>
            <section class="hero-section d-flex justify-content-center align-items-center">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-6 col-12">
                            <form class="custom-form hero-form" action="funciones/iniciar-sesion.php" method="post" role="form">
                                <h3 class="text-white mb-3 d-flex justify-content-center">Iniciar sesión.</h3>
                                <!-- Mensaje de error -->
                                <?php
                                if (isset($_GET['error'])) {
                                    $errorMensaje = $_GET['error'];
                                    echo '<div class="alert alert-danger">' . $errorMensaje . '</div>';
                                }
                                ?>
                                <div class="row">
                                    <div class="col-lg-12 col-12"> 
                                        <div class="input-group">
                                            <span class="input-group-text" id="basic-addon1"><i class="bi bi-envelope"></i></span>
                                            <input type="email" name="txt-email" id="txt-email" class="form-control" placeholder="Email." required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-12">
                                        <div class="input-group">
                                            <span class="input-group-text" id="basic-addon2"><i class="bi bi-key"></i></span>
                                            <input type="password" name="txt-clave" id="txt-clave" class="form-control" placeholder="Contraseña." required>
                                            <i class="px-2 input-group-text toggle-password bi bi-eye" onclick="togglePassword()"></i>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-12">
                                        <button type="submit" class="form-control" style="background-color: #ffffff; color: #142e61ff;">Iniciar sesión</button>
                                    </div>
                                    <?php 
                                    if(isset($_GET['message'])){
                                    ?>
                                      <div class="alert alert-primary" role="alert">
                                        <?php 
                                        switch ($_GET['message']) {
                                          case 'ok':
                                            echo 'Por favor, revisa tu correo.';
                                            break;
                                          case 'success_password':
                                            echo 'Inicia sesión con tu nueva contraseña.';
                                            break;
                                          default:
                                            echo 'Algo salió mal, intenta de nuevo.';
                                            break;
                                        }
                                        ?>
                                      </div>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
<br><br>

           <!-- Footer -->
    <?php
        include 'footer1.php';
    ?>

        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/counter.js"></script>
        <script src="js/custom.js"></script>
        <script src="js/scripteye.js"></script>

    </body>
</html>