<?php
function subirArchivo($ruta) {
    if (!file_exists($ruta)) {
        mkdir($ruta, 0777, true);
    }

    if (isset($_FILES['archivo']) && $_FILES['archivo']['error'] === 0) {
        $nombre = basename($_FILES['archivo']['name']);
        move_uploaded_file($_FILES['archivo']['tmp_name'], $ruta . $nombre);
    }
}

if (isset($_POST['act1'])) {
    subirArchivo("evidencias/unidad_4/saber_hacer/actividad_1/");
}

if (isset($_POST['act2'])) {
    subirArchivo("evidencias/unidad_4/saber_hacer/actividad_2/");
}

if (isset($_GET['del']) && isset($_GET['act'])) {
    $ruta = "evidencias/unidad_4/saber_hacer/" . $_GET['act'] . "/";
    $archivo = basename($_GET['del']);

    if (file_exists($ruta . $archivo)) {
        unlink($ruta . $archivo);
    }

    header("Location: unidad_4_saber_hacer.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Unidad 4 – Saberes Hacer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="style/portafolio.css">
</head>
<body>

<header class="bg-dark text-white p-3">
    <div class="container d-flex justify-content-between align-items-center">
        <h4 class="mb-0">Unidad 4 · Saberes Hacer</h4>
        <a href="unidad_4.php" class="btn btn-outline-light">← Volver</a>
    </div>
</header>

<section class="container py-5">

    <p class="fs-5 mb-5">
        Actividades prácticas enfocadas en la seguridad,
        protección y despliegue de servicios web.
    </p>

    <div class="row g-4">

        <!-- ACTIVIDAD 1 -->
        <div class="col-md-6">
            <div class="card shadow p-4 h-100">
                <h5 class="mb-3">Saber Hacer #1</h5>

                <p>
                    Implementación de mecanismos de autenticación
                    y autorización en servicios web.
                </p>

                <form method="post" enctype="multipart/form-data" class="mb-3">
                    <input type="file" name="archivo" class="form-control mb-2" required>
                    <button type="submit" name="act1" class="btn btn-primary">
                        Subir evidencia
                    </button>
                </form>

                <hr>

                <h6>Evidencias subidas:</h6>

                <?php
                $ruta1 = "evidencias/unidad_4/saber_hacer/actividad_1/";
                if (file_exists($ruta1)) {
                    foreach (scandir($ruta1) as $a) {
                        if ($a != "." && $a != "..") {
                            echo "
                            <div class='d-flex justify-content-between align-items-center mb-2'>
                                <span>$a</span>
                                <a href='?act=actividad_1&del=$a' class='text-danger'>
                                    Eliminar
                                </a>
                            </div>";
                        }
                    }
                }
                ?>
            </div>
        </div>

        <!-- ACTIVIDAD 2 -->
        <div class="col-md-6">
            <div class="card shadow p-4 h-100">
                <h5 class="mb-3">Saber Hacer #2</h5>

                <p>
                    Despliegue seguro de un servicio web
                    en un entorno de producción.
                </p>

                <form method="post" enctype="multipart/form-data" class="mb-3">
                    <input type="file" name="archivo" class="form-control mb-2" required>
                    <button type="submit" name="act2" class="btn btn-primary">
                        Subir evidencia
                    </button>
                </form>

                <hr>

                <h6>Evidencias subidas:</h6>

                <?php
                $ruta2 = "evidencias/unidad_4/saber_hacer/actividad_2/";
                if (file_exists($ruta2)) {
                    foreach (scandir($ruta2) as $a) {
                        if ($a != "." && $a != "..") {
                            echo "
                            <div class='d-flex justify-content-between align-items-center mb-2'>
                                <span>$a</span>
                                <a href='?act=actividad_2&del=$a' class='text-danger'>
                                    Eliminar
                                </a>
                            </div>";
                        }
                    }
                }
                ?>
            </div>
        </div>

    </div>
</section>

<footer class="bg-dark text-white text-center p-3 mt-5">
    © 2026 · Portafolio DWOS
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
