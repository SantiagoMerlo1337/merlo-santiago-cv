<!DOCTYPE html>
<html lang="es">
<head>
    <?php
        require_once('resources/head.php');
    ?>
</head>

<body class="bg-dark">
    <!-- Header -->
    <div class="container-fluid bg-dark shadow">
        <div class="container">
            <div class="row py-4 d-flex align-items-center justify-content-center text-center  text-white">
                <div class="col-12 col-md-3">
                    <img class="foto_carnet pb-1 text-md-end" src="img/foto_carnet.png" alt="Foto carnet">
                </div>
                <div class="col-12 col-md-9 pb-1 text-md-start">
                    <h1 class="m-0 mb-1">Merlo, Santiago</h1>
                    <h2 class="fs-5 m-0 fw-light">Desarrollador Web Fullstack Jr</h2>
                    <!-- <h3 class="fs-5 m-0 fw-lighter">Estudiante de Ingeniería en Informática</h3> -->
                </div>
            </div>
            <hr class="mt-0 mb-4">
        </div>
    </div>

    <main class="bg-light">
        <div class="container">
            <div class="row gy-4">
                <!-- Aside-->
                <div class="col-12 col-md-4 order-5 order-md-1 d-flex flex-column mt-0 mt-md-4">

                    <!-- Contacto -->
                    <div class="text-center text-md-start order-4 order-md-2">
                        <h3 class="fs-2 fw-bold mb-3">Contacto</h3>
                        <ul class="ps-0">
                            <li class="list-group-item"><p class="mb-2">Rafaela, Santa Fe, Argentina</p></li>
                            <li class="list-group-item"><p class="mb-2">santiagomerlo1337@gmail.com</p></li>
                            <li class="list-group-item"><p class="mb-2">linkedin.com/in/santiagomerlo1337</p></li>
                            <li class="list-group-item"><p class="mb-2">+5403492691132</p></li>
                        </ul>    

                        <div class="d-flex justify-content-center justify-content-md-start mb-4 mb-md-0">
                            <a class="links p-0 m-1" href="https://github.com/SantiagoMerlo1337">
                                <button class="btn btn-dark p-2">
                                    <img class="redes p-0" src="img/github.png" alt="GitHub">
                                </button>
                            </a>
                            <a class="links p-0 m-1" href="https://github.com/SantiagoMerlo1337">
                                <button class="btn btn-dark p-2">
                                    <img class="redes p-0" src="img/linkedin.png" alt="LinkedIn">
                                </button>
                            </a>
                            <a class="links p-0 m-1" href="https://wa.me/5403492691132">
                                <button class="btn btn-dark p-2">
                                    <img class="redes p-0" src="img/whatsapp.png">
                                </button>
                            </a>
                        </div>    
                    </div>
                    
                    <hr class="d-block d-md-none mb-0 mt-2">

                    <!-- Habilidades -->
                    <div class="order-2 order-md-4">
                        <h3 class="fs-2 fw-bold mb-3 mt-4 text-center text-md-start">Habilidades</h3>
                        <ul class="pointRemover">
                            <li>
                                <h4 class="fs-5">Desarrollo Web Full Stack</h4>
                                <p class="mb-2">HTML, CSS, Bootstrap, JavaScript, Python Django, React, Material UI</p>
                            </li>
                            <li>
                                <h4 class="fs-5">Programación</h4>
                                <p class="mb-2">Orientada a Objetos, C#, .NET, Python, MVC, API REST</p>
                            </li>
                            <li>
                                <h4 class="fs-5">Bases de Datos</h4>
                                <p class="mb-2"></p>SQL, SQL Server, MySQL, Modelado de datos</p>
                            </li>
                            <li>
                                <h4 class="fs-5">Controlador de versiones</h4>
                                <p class="mb-2"></p>Git, GitHub</p>
                            </li>
                            <li>
                                <h4 class="fs-5">Otros</h4>
                                <p class="mb-2"></p>Photoshop, Ilustrator, paquete Office</p>
                            </li>
                            <hr class="d-block d-md-none mb-0">
                        </ul>                        
                    </div>
                </div>

                <!-- Contenido -->
                <div class="col-12 col-md-8 order-1 order-md-5">

                    <!-- Educación -->
                    <h3 class="fs-2 fw-bold mb-3 text-center text-md-start">Educación</h3>
                    <ul class="pointRemover">
                        <li>
                            <h4 class="fs-4 d-inline">Ingeniería en Informática </h4>
                            <p class="fs-4 d-inline">(2019 - Actualidad)</p>
                            <p>Universidad Católica de Santiago del Estero (Rafaela, Santa Fe, Argentina)</p>
                        </li>
                        <li>
                            <h4 class="fs-4 d-inline">Bachiller en Informática </h4>
                            <p class="fs-4 d-inline">(2016 - 2018)</p>
                            <p>Colegio San José Rafaela (Rafaela, Santa Fe, Argentina)</p>
                        </li>
                    </ul>
                    <hr>

                    <!-- Experiencia -->
                    <h3 class="fs-2 fw-bold mb-3 text-center text-md-start">Experiencia</h3>
                    <ul class="pointRemover">
                        <li>
                            <h4 class="fs-4 d-inline">Desarrollo Web Freelance </h4>
                            <p class="fs-4 d-inline">(2022 - Actualidad)</p>
                            <p>Desarrollo de sitios web de manera freelance para diversos clientes, enfocando el diseño en captación de usuarios, conversión de tráfico, UX/UI simple e 
                                intuitiva, y priorizando la optimización y SEO de la web. Trabajos realizados con tecnologías como HTML, CSS, Bootstrap, JavaScript, React, CMS, etc.</p>
                        </li>    
                    </ul>
                    
                    <hr class="d-none d-md-block">

                    <div class="d-flex gap-3 justify-content-center">
                        <div class="d-flex justify-content-center my-2">
                            <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                <div class="d-flex align-items-center">
                                    <img class="portafolio me-1" src="img/briefcase.png" alt="Portafolio">
                                    Portafolio
                                </div>
                            </button>
                        </div>
    
                        <div class="d-flex justify-content-center my-2">
                            <button type="button" class="btn btn-dark">
                                <div class="d-flex align-items-center">
                                    <img class="portafolio me-1" src="img/direct-download.png" alt="Descarga directa">
                                    Descargar CV
                                </div>
                            </button>
                        </div>
                    </div>
                    
                    
                    <!-- <hr class="d-block d-md-none mb-0"> -->
                    
                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header mx-2">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Portafolio</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <!-- Modal Body -->
                                    
                                    <!-- Estudio de Danzas Web
                                    Website for 'Estudio de Danzas Viviana Musso'
                                    Technologies: HTML, CSS, Bootstrap, JavaScript, React

                                    ViajandoAndo
                                    Sitio web "carpooling"
                                    Tecnologías: HTML, CSS, Bootstrap, Python Django, SQLite -->
                                    <ul class="pointRemover">
                                        <li>
                                            <h4 class="fs-4 fw-bold">ViajandoAndo</h4>
                                            <p class="fs-5 mb-1">Sitio web "carpooling"</p>
                                            <p class="mb-5 fst-italic">Tecnologías: HTML, CSS, Bootstrap, Python Django, SQLite</p>
                                        </li>
                                        <li>
                                            <h4 class="fs-4 fw-bold">ViajandoAndo</h4>
                                            <p class="fs-5 mb-1">Sitio web "carpooling"</p>
                                            <p class="mb-5 fst-italic">Tecnologías: HTML, CSS, Bootstrap, Python Django, SQLite</p>
                                        </li>
                                        <li>
                                            <h4 class="fs-4 fw-bold">ViajandoAndo</h4>
                                            <p class="fs-5 mb-1">Sitio web "carpooling"</p>
                                            <p class="mb-5 fst-italic">Tecnologías: HTML, CSS, Bootstrap, Python Django, SQLite</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

    </main>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>