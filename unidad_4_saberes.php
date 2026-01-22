<?php
function subir($ruta) {
    if (!file_exists($ruta)) {
        mkdir($ruta, 0777, true);
    }
    if (isset($_FILES['archivo']) && $_FILES['archivo']['error'] === 0) {
        move_uploaded_file(
            $_FILES['archivo']['tmp_name'],
            $ruta . basename($_FILES['archivo']['name'])
        );
    }
}

if (isset($_POST['act1'])) subir("evidencias/unidad_4/saber/actividad_1/");
if (isset($_POST['act2'])) subir("evidencias/unidad_4/saber/actividad_2/");

if (isset($_GET['del']) && isset($_GET['act'])) {
    $ruta = "evidencias/unidad_4/saber/" . $_GET['act'] . "/";
    $archivo = basename($_GET['del']);

    if (file_exists($ruta . $archivo)) {
        unlink($ruta . $archivo);
    }
    header("Location: unidad_4_saberes.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Unidad 4 – Saberes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style/portafolio.css">
</head>
<body>

<header class="bg-dark text-white p-3">
    <div class="container d-flex justify-content-between align-items-center">
        <h4>Unidad 4 · Saberes</h4>
        <a href="unidad_4.php" class="btn btn-outline-light">Volver</a>
    </div>
</header>

<section class="container py-5">

    <p class="fs-5 mb-4">
        Contenidos teóricos relacionados con la seguridad,
        autenticación, autorización y despliegue de servicios web.
    </p>

    <div class="row g-4">

        <!-- ACTIVIDAD 1 -->
        <div class="col-md-6">
            <div class="card p-4 shadow h-100">
                <h5>Actividad 1</h5>
                <p>
                    Seguridad en servicios web: autenticación,
                    autorización y manejo de tokens.
                </p>

                <form method="post" enctype="multipart/form-data" class="mb-3">
                    <input type="file" name="archivo" class="form-control mb-2" required>
                    <button class="btn btn-primary" name="act1">Subir evidencia</button>
                </form>

                <hr>
                <h6>Evidencias subidas:</h6>

                <?php
                $ruta1 = "evidencias/unidad_4/saber/actividad_1/";
                if (file_exists($ruta1)) {
                    foreach (scandir($ruta1) as $f) {
                        if ($f != "." && $f != "..") {
                            echo "
                            <div class='d-flex justify-content-between align-items-center mb-2'>
                                <span>$f</span>
                                <a href='?act=actividad_1&del=$f' class='text-danger'>Eliminar</a>
                            </div>";
                        }
                    }
                }
                ?>
            </div>
        </div>

        <!-- ACTIVIDAD 2 -->
        <div class="col-md-6">
            <div class="card p-4 shadow h-100">
                <h5>Actividad 2</h5>
                <p>
                    Despliegue de servicios web y consideraciones
                    de seguridad en producción.
                </p>

                <form method="post" enctype="multipart/form-data" class="mb-3">
                    <input type="file" name="archivo" class="form-control mb-2" required>
                    <button class="btn btn-primary" name="act2">Subir evidencia</button>
                </form>

                <hr>
                <h6>Evidencias subidas:</h6>

                <?php
                $ruta2 = "evidencias/unidad_4/saber/actividad_2/";
                if (file_exists($ruta2)) {
                    foreach (scandir($ruta2) as $f) {
                        if ($f != "." && $f != "..") {
                            echo "
                            <div class='d-flex justify-content-between align-items-center mb-2'>
                                <span>$f</span>
                                <a href='?act=actividad_2&del=$f' class='text-danger'>Eliminar</a>
                            </div>";
                        }
                    }
                }
                ?>
            </div>
        </div>

    </div>
</section>

<footer class="bg-dark text-white text-center p-3">
    © 2026 · Portafolio DWOS
</footer>

</body>
</html>
