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

// SUBIDAS
if (isset($_POST['act1'])) subirArchivo("evidencias/unidad_2/saber_hacer/actividad_1/");
if (isset($_POST['act2'])) subirArchivo("evidencias/unidad_2/saber_hacer/actividad_2/");

// ELIMINAR
if (isset($_GET['del']) && isset($_GET['act'])) {
    $ruta = "evidencias/unidad_2/saber_hacer/" . $_GET['act'] . "/";
    $archivo = basename($_GET['del']);

    if (file_exists($ruta . $archivo)) {
        unlink($ruta . $archivo);
    }

    header("Location: unidad_2_saber_hacer.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Unidad 2 – Saberes Hacer</title>
    <link rel="stylesheet" href="style/portafolio.css">
</head>
<body>

<header class="bg-dark text-white p-3">
    <div class="container d-flex justify-content-between align-items-center">
        <h4 class="mb-0">Unidad 2 · Saberes Hacer</h4>
        <a href="unidad_2.php" class="btn btn-outline-light">← Volver</a>
    </div>
</header>

<section class="container py-5">

    <p class="fs-5 mb-5">
        Actividades prácticas relacionadas con el consumo de APIs
        y la integración de servicios web.
    </p>

    <div class="row g-4">

        <!-- ACTIVIDAD 1 -->
        <div class="col-md-6">
            <div class="card shadow p-4 h-100">
                <h5>Saber Hacer #1</h5>
                <p>Consumo de una API pública.</p>

                <form method="post" enctype="multipart/form-data">
                    <input type="file" name="archivo" class="form-control mb-2" required>
                    <button name="act1" class="btn btn-primary">Subir evidencia</button>
                </form>

                <hr>
                <h6>Evidencias:</h6>

                <?php
                $ruta1 = "evidencias/unidad_2/saber_hacer/actividad_1/";
                if (file_exists($ruta1)) {
                    foreach (scandir($ruta1) as $a) {
                        if ($a != "." && $a != "..") {
                            echo "
                            <div class='d-flex justify-content-between mb-2'>
                                <a href='$ruta1$a' target='_blank'>$a</a>
                                <a href='?act=actividad_1&del=" . urlencode($a) . "' class='text-danger'>Eliminar</a>
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
                <h5>Saber Hacer #2</h5>
                <p>Pruebas y validación de respuestas.</p>

                <form method="post" enctype="multipart/form-data">
                    <input type="file" name="archivo" class="form-control mb-2" required>
                    <button name="act2" class="btn btn-primary">Subir evidencia</button>
                </form>

                <hr>
                <h6>Evidencias:</h6>

                <?php
                $ruta2 = "evidencias/unidad_2/saber_hacer/actividad_2/";
                if (file_exists($ruta2)) {
                    foreach (scandir($ruta2) as $a) {
                        if ($a != "." && $a != "..") {
                            echo "
                            <div class='d-flex justify-content-between mb-2'>
                                <a href='$ruta2$a' target='_blank'>$a</a>
                                <a href='?act=actividad_2&del=" . urlencode($a) . "' class='text-danger'>Eliminar</a>
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
