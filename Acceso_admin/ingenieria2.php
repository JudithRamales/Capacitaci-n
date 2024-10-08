<?php
include '../funciones/conex.php';
include '../funciones/funciones.php';
conectar();       
session_start();
?>

<?php include '../header-superadmin.php'; ?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Administración</title>

        <!-- CSS FILES -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100;300;400;600;700&display=swap" rel="stylesheet">

        <link href="../css/bootstrap.min.css" rel="stylesheet">

        <link href="../css/bootstrap-icons.css" rel="stylesheet">

        <link href="../css/owl.carousel.min.css" rel="stylesheet">

        <link href="../css/owl.theme.default.min.css" rel="stylesheet">

        <link href="../css/tooplate-gotto-job.css" rel="stylesheet">
        
<!--

Tooplate 2134 Gotto Job

https://www.tooplate.com/view/2134-gotto-job

Bootstrap 5 HTML CSS Template

-->
</head>

    <body class="Creador-y-desarrollador-page" id="top">

    <main>

    <style>
        .site-header {
            background-color: #142e61ff; /* Cambia el color de fondo a azul (#007bff) o tu preferencia */
            color: #fff; /* Cambia el color del texto en el encabezado */
        }

        /* Agrega cualquier otro estilo que necesites */

    </style>

<header class="site-header py-5">

    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="text-white">Departamento de ingenieria.</h1>
            </div>
        </div>
    </div>
</header>

<script>
    document.getElementById('searchForm').addEventListener('submit', function (e) {
        // Evita que el formulario se envíe normalmente
        e.preventDefault();

        // Acciones adicionales si es necesario

        // Envía el formulario programáticamente
        this.submit();
    });

    // Agrega un listener al campo de entrada para realizar la búsqueda al presionar Enter
    document.querySelector('.search-form input').addEventListener('keyup', function (e) {
        if (e.key === 'Enter') {
            // Realiza la búsqueda al presionar Enter
            document.getElementById('searchForm').submit();
        }
    });
</script>

<section class="job-section section-padding">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-6 col-12 mb-lg-4">
                <h3>Colegas.</h3>
            </div>

            <div class="col-lg-4 col-12 d-flex align-items-center ms-auto mb-5 mb-lg-4">
                <div class="dropdown dropdown-sorting ms-3 me-4">
                </div>
                <div class="d-flex">
                </div>
            </div>

            <?php
// Consulta SQL para buscar por nombre de proyecto
$query = "SELECT nombre, paterno, materno, escuela, id_usuario FROM usuarios WHERE departamento = 'Ingenieria'";

// Ejecuta la consulta
$result = mysqli_query($conexion, $query);

if ($result) {
    // Comprueba si hay filas de resultados
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            // Recupera los datos de la base de datos
            $id_usuario = $row['id_usuario'];
            $nombre = $row['nombre'];
            $paterno = $row['paterno'];
            $materno = $row['materno'];
            $escuela = $row['escuela'];

            // Aquí, en lugar de mostrar el nombre del proyecto directamente, debes crear una estructura similar a la del código que proporcionaste.
            echo '<div class="col-lg-4 col-md-6 col-12">';
            echo '    <div class="job-thumb job-thumb-box">';
            echo '        <div class="job-image-box-wrap">';
            // Enlaza el título al detalle del proyecto
echo '            <h4 class="job-title">';
echo '                <a href="../admin/informacion-colega2.php?id_colega=' . $id_usuario . '" class="job-title-link">' . $nombre . ' ' . $paterno . ' ' . $materno . '</a>';
echo '            </h4>';

            // Debes recuperar la categoría del proyecto aquí y mostrarla.
            echo '            <p class="job-category">Escuela: ' . $escuela . '</p>';
            echo '            <div class="d-flex align-items-center">';
            echo '            </div>';
            echo '            <div class="d-flex align-items-center">';
            echo '            </div>';
            echo '            <div class="d-flex align-items-center border-top pt-3">';
            echo '                <a href="../admin/informacion-colega2.php?id_colega=' . $id_usuario . '" class="custom-btn btn ms-auto">Ver documentación</a>';
            echo '            </div>';
            echo '        </div>';
            echo '    </div>';
            echo '</div>';
        }
    } else {
        // Si no hay proyectos en la base de datos, puedes mostrar un mensaje o manejarlo de otra manera
        echo 'No se encontraron colegas.';
    }

    // Libera el resultado
    mysqli_free_result($result);
}

// Cierra la conexión a la base de datos al final
mysqli_close($conexion);
?>
        </div>
    </div>
</section>
</main>

              <!-- Footer -->
    <?php
        include '../footer1.php';
    ?>

        <!-- JAVASCRIPT FILES -->
        <script src="../js/jquery.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/owl.carousel.min.js"></script>
        <script src="../js/counter.js"></script>
        <script src="../js/custom.js"></script>

    </body>
</html>