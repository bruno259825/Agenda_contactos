
<?php require_once 'cabecera.php'?>
<?php require_once '../funciones/f1.php'?>
    <body>
        <div class="container-fluid">

            <div class="row justify-content-center mt-4">
                <?php require_once 'login.php'; ?>

                <?php require_once 'register.php'; ?>


            </div>
        </div>

        <?php destruir_sesion()?>
        <?php require_once 'scripts.php'?>
    </body>
    
    

</html>