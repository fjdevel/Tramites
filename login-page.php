<?php 
/**
* Template Name: Login

*/

if (isset( $_POST['btn-submit'] )) {
    if(!empty($_POST['user']) && !empty($_POST['password'])){
        do_action("login",$_POST['user'],$_POST['password']);
    }
}



get_header();

?>


 <nav class="navbar navbar-light backgroud-dark shadow p-3 mb-5">
            <a class=" navbar-brand font-color-white nav-title" href="#">
                <span class="oi oi-chevron-left" class="d-inline-block align-top"></span>
                Regresar
            </a>
            <span class="font-color-white">Inicio de Sesión</span>
        </nav>
        <div class="container mt-5">
                <div class="row justify-content-center">
                    <div>
                        <img src="<?php echo get_template_directory_uri() . '/assets/static/img/logo.jpg'; ?>" width="150" height="150">
                    </div>
                </div>
                <div class="row justify-content-center mt-5">
                    <form id="my-form" class="col-md-6 text-center" method="post" action="">
                        <div class="form-row">
                            <div class="form-group col-md-12 text-center">
                                <label for="user" class="text-green font-weight-bold">Ingrese el Usuario</label>
                                <input required="" name="user" type="text" class="form-control text-center" id="user" placeholder="Ingrese el Usuario">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12 text-center">
                                <label class="text-green font-weight-bold" for="password">Ingrese la Contraseña</label>
                                <input name="password" required="" type="text" class="form-control text-center" id="password" placeholder="Ingrese la contraseña">
                            </div>
                        </div>
                        <button name="btn-submit" type="submit" class="btn btn-success mt-1">Iniciar sesion</button>
                        <div class="form-row justify-content-center">
                            <small class="form-text text-muted"><a class="mr-2" href="<?php echo get_site_url().'/index.php/registro-de-usuarios/'?>">Registrarse</a>|<a class="ml-2">Recuperar Contraseña</a></small>
                        </div>
                    </form>
                </div>
              </div>
              <?php
              get_footer();
              ?>