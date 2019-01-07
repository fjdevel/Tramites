<?php
/**
* Template Name: Registro

*/
get_header();
?>

<nav class="navbar navbar-light backgroud-dark shadow p-3 mb-5">
                <a class=" navbar-brand font-color-white nav-title" href="login.html">
                    <span class="oi oi-chevron-left" class="d-inline-block align-top"></span>
                    Regresar
                </a>
                <span class="font-color-white">Registro de Usuario</span>
            </nav>

        <div class="container mt-5">
                <div class="row justify-content-center mt-5">
                    <form class="col-md-6 ">
                        <div class="form-group ">
                            <label for="user" class="text-green font-weight-bold">Nombre de Usuario</label>
                            <input type="text" class="form-control" id="user" placeholder="Nombre de Usuario">
                        </div>
                        <div class="form-group">
                            <label for="password"  class="text-green font-weight-bold">Contraseña</label>
                            <input type="text" class="form-control" id="password" placeholder="Contraseña">
                        </div>
                        <div class="form-group">
                            <label for="password"  class="text-green font-weight-bold">Apellidos</label>
                            <input type="text" class="form-control" id="password" placeholder="Apellidos">
                        </div>
                        <div class="form-group">
                                <label for="password"  class="text-green font-weight-bold">Numero de Licencia</label>
                                <input type="text" class="form-control" id="password" placeholder="Numero de Licencia">
                            </div>
                        <div class="form-group">
                            <label for="password"  class="text-green font-weight-bold">Documento de identidad</label>
                            <input type="text" class="form-control" id="password" placeholder="Documento de identidad">
                        </div>
                        <div class="form-group">
                                <label for="password"  class="text-green font-weight-bold">Correo Electronico</label>
                                <input type="text" class="form-control" id="password" placeholder="Correo Electronico">
                        </div>
                        <button type="submit" class="btn btn-success">Registrarme</button>
                    </form>
                </div>
              </div>
<?php
get_footer();