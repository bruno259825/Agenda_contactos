


<div class="col-lg-4 col-md-6 mt-lg-5 d-flex align-items-center justify-content-md-between justify-content-center">
    <div class="bg-primary rounded text-center">
        <form class="py-2 px-3" method="POST" action="../validar-login.php">
            <p class="text-center text-white">Sign In</p>
            
            <?php if(isset($_SESSION['error-login']['autenticacion'])):?>
                <div class="error mb-2"><?php echo $_SESSION['error-login']['autenticacion']?></div>
                
            <?php elseif($_SESSION['error-login']['campos']):?>
                <div class="error mb-2"><?php echo $_SESSION['error-login']['campos']?></div>
            <?php endif; ?>
            
            <div class="form-group">
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <img class="icono"src="../assets/img/person.svg">
                        </div>
                    </div>
                    <input type="text" class="form-control" name="user-id" placeholder="Username">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <img class="icono"src="../assets/img/password.svg">
                        </div>
                    </div>
                    <input type="password" class="form-control" name="user-password" placeholder="Password">
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>





