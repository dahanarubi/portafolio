<?php
function subir($ruta) {
    if (!file_exists($ruta)) {
        mkdir($ruta, 0777, true);
    }
    if (!empty($_FILES['archivo']['name'])) {
        $nombre = basename($_FILES['archivo']['name']);
        move_uploaded_file($_FILES['archivo']['tmp_name'], $ruta . $nombre);
    }
}

/* ================= SUBIDAS ================= */
if (isset($_POST['act1'])) subir("evidencias/unidad_1/saber/actividad_1/");
if (isset($_POST['act2'])) subir("evidencias/unidad_1/saber/actividad_2/");

/* ================= ELIMINAR ACT 1 ================= */
if (isset($_GET['del1'])) {
    $ruta = "evidencias/unidad_1/saber/actividad_1/";
    $archivo = basename($_GET['del1']);

    if (file_exists($ruta . $archivo)) {
        unlink($ruta . $archivo);
    }

    header("Location: unidad_1_saberes.php");
    exit;
}

/* ================= ELIMINAR ACT 2 ================= */
if (isset($_GET['del2'])) {
    $ruta = "evidencias/unidad_1/saber/actividad_2/";
    $archivo = basename($_GET['del2']);

    if (file_exists($ruta . $archivo)) {
        unlink($ruta . $archivo);
    }

    header("Location: unidad_1_saberes.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Unidad 1 – Saberes</title>
    <link rel="stylesheet" href="style/portafolio.css">
</head>
<body>

<header class="bg-dark text-white p-3">
    <div class="container d-flex justify-content-between">
        <h4>Unidad 1 · Saberes</h4>
        <a href="unidad_1.php" class="btn btn-outline-light">Volver</a>
    </div>
</header>

<section class="container py-5">

    <p class="fs-5 mb-4">
        En esta sección se desarrollan los contenidos teóricos del Desarrollo Web
        Orientado a Servicios y la Arquitectura SOA.
    </p>

    <div class="row g-4">

        <!-- ACTIVIDAD 1 -->
        <div class="col-md-6">
            <div class="card p-4 shadow">
                <h5>Actividad 1</h5>
                <p>
                    Paradigma de aplicaciones orientadas a servicios, servicios en la nube
                    y aplicaciones web híbridas (Mashup).
                </p>

                <form method="post" enctype="multipart/form-data">
                    <input type="file" name="archivo" class="form-control mb-2" required>
                    <button class="btn btn-primary" name="act1">Subir evidencia</button>
                </form>

                <hr>

                <?php
                $ruta = "evidencias/unidad_1/saber/actividad_1/";
                if (file_exists($ruta)) {
                    foreach (scandir($ruta) as $f) {
                        if ($f != "." && $f != "..") {
                            echo "
                            <div class='d-flex justify-content-between align-items-center mb-2'>
                                <a href='$ruta$f' target='_blank'>$f</a>
                                <a href='?del1=" . urlencode($f) . "' class='text-danger'>
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
            <div class="card p-4 shadow">
                <h5>Actividad 2</h5>
                <p>
                    Arquitectura SOA y estándares XML, SOAP, WSDL, UDDI y REST.
                </p>

                <form method="post" enctype="multipart/form-data">
                    <input type="file" name="archivo" class="form-control mb-2" required>
                    <button class="btn btn-primary" name="act2">Subir evidencia</button>
                </form>

                <hr>

                <?php
                $ruta = "evidencias/unidad_1/saber/actividad_2/";
                if (file_exists($ruta)) {
                    foreach (scandir($ruta) as $f) {
                        if ($f != "." && $f != "..") {
                            echo "
                            <div class='d-flex justify-content-between align-items-center mb-2'>
                                <a href='$ruta$f' target='_blank'>$f</a>
                                <a href='?del2=" . urlencode($f) . "' class='text-danger'>
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

<footer class="bg-dark text-white text-center p-3">
    © 2026 · Portafolio DWOS
</footer>

</body>
</html>
