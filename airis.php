<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Portafolio DWOS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- CSS propio -->
    <link rel="stylesheet" href="style/portafolio.css">

  
<!-- ================= HEADER ================= -->
<header class="bg-dark text-white p-3">
    <div class="container d-flex justify-content-between align-items-center">
        <h4 class="mb-0">Portafolio DWOS</h4>

        <a href="index.php" class="btn btn-outline-light">
            <i class="bi bi-arrow-left"></i> 
        </a>
    </div>
</header>

<section class="container mt-4">

    <!-- FOTO Y DATOS -->
    <div class="profile-header d-flex flex-wrap align-items-center gap-4">
        <img src="image/airis.jpeg" class="img-fluid profile-pic" alt="Foto Airis Victoria Rodriguez">
        <div>
            <h3 class="mb-1">Airis Victoria Rodriguez Cardona</h3>
            <p class="mb-1 text-muted">Estudiante de Ingeniería en Desarrollo de Software · Área Multiplataforma</p>
            <p class="mb-0 text-muted">Email: ""@alumno.utc.edu.mx | LinkedIn: <a href="#" target="_blank">Perfil</a></p>
        </div>
    </div>

    <!-- NAVBAR INTERNO -->
    <ul class="nav nav-tabs mt-4 shadow-sm" id="perfilTabs" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="sobre-tab" data-bs-toggle="tab" data-bs-target="#sobre" type="button" role="tab">Sobre mí</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="habilidades-tab" data-bs-toggle="tab" data-bs-target="#habilidades" type="button" role="tab">Habilidades</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="proyectos-tab" data-bs-toggle="tab" data-bs-target="#proyectos" type="button" role="tab">Proyectos</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="contacto-tab" data-bs-toggle="tab" data-bs-target="#contacto" type="button" role="tab">Contacto</button>
        </li>
    </ul>

    <div class="tab-content mt-3">
        <!-- SOBRE MÍ -->
        <div class="tab-pane fade show active" id="sobre" role="tabpanel">
            <p class="fs-5">Aprenderás a desarrollar aplicaciones web orientadas a servicios, integrando APIs, manejando bases de datos, aplicando buenas prácticas de programación y publicando proyectos en hosting real, reforzando tus competencias técnicas y prácticas en desarrollo web.</p>
        </div>

        <!-- HABILIDADES -->
        <div class="tab-pane fade" id="habilidades" role="tabpanel">
            <div class="d-flex flex-wrap gap-2">
                <span class="unidad-card p-2">HTML</span>
                <span class="unidad-card p-2">CSS</span>
                <span class="unidad-card p-2">JavaScript</span>
                <span class="unidad-card p-2">PHP</span>
                <span class="unidad-card p-2">MySQL</span>
                <span class="unidad-card p-2">APIs REST</span>
                <span class="unidad-card p-2">Bootstrap</span>
            </div>
        </div>

        <!-- PROYECTOS -->
        <div class="tab-pane fade" id="proyectos" role="tabpanel">
            <div class="unidad-card p-3 mb-3 shadow-sm hover-scale">
                <h5>Portafolio DWOS</h5>
                <p>Aplicación web de portafolio con registro, login y visualización de unidades.</p>
            </div>
            <div class="unidad-card p-3 mb-3 shadow-sm hover-scale">
                <h5>API REST de Productos</h5>
                <p>Desarrollo y consumo de API REST con PHP y JSON.</p>
            </div>
        </div>

        <!-- CONTACTO -->
        <div class="tab-pane fade" id="contacto" role="tabpanel">
            <p>Email: 24040093@alumno.utc.edu.mx</p>
            <p>LinkedIn: <a href="#" target="_blank">Perfil</a></p>
            <p>GitHub: <a href="#" target="_blank">Repositorio</a></p>
        </div>
    </div>

</section>

<!-- ================= FOOTER ================= -->
<footer class="bg-dark text-white text-center py-4">
    <p class="mb-1">Portafolio de Evidencias - 2026</p>
    <p class="mb-1">Dahana Rubi Montejano · Airis Victoria Rodríguez</p>
    <p class="mb-0">Universidad Tecnologica de Coahuila</p>
    <p class="mb-0">Km. 9 Carretera a Saltillo 4.5(232)</p>
    <p class="mb-0">Universidad Ramos Arizpe, Coah cp.25220</p>
    <p class="mb-0">© 2026 – Todos los derechos reservados
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
