<?php require_once 'cabecera.php' ?>

<body>
    <div class="container bg-primary contenedor-contactos pt-3">

        <div class="row">
            <div class="col-4">
                <figure class="figure">
                    <img src="../assets/img/user.png" class="figure-img img-fluid rounded foto-perfil" alt="No se pudo cargar la Imágen">
                    <figcaption class="figure-caption">Bruno Miguel Rodriguez Mendoza</figcaption>
                </figure>
                <div class="herramientas">
                    <ul class="px-0">
                        <li><a href="contactos.php">Contactos</a></li>
                        <li><a href="contactos.php">Mensajes</a></li>
                        <li><a href="contactos.php">Editar Perfil</a></li>
                    </ul>
                </div>
                
            </div>
            <div class="col-8 contactos opactiy-3">
                <div class="row mt-4 no-gutters p-2">
                    <div class="col-12">
                        <img class="icono-contacto rounded" src="../assets/img/user.png">
                        <span class="text-white ml-3">Brayan Andres Rodriguez Mendoza</span>
                    </div>
                </div>
                <div class="row mt-4 no-gutters p-2">
                    <div class="col-12">
                        <img class="icono-contacto rounded" src="../assets/img/user.png">
                        <span class="text-white ml-3">Techi Rodriguez Mendoza</span>
                    </div>
                </div>
                <div class="row mt-4 no-gutters p-2">
                    <div class="col-12">
                        <img class="icono-contacto rounded" src="../assets/img/user.png">
                        <span class="text-white ml-3">La beba army</span>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php require_once 'scripts.php' ?>
</body>