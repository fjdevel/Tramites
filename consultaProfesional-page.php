<?php 
/**
* Template Name: Consulta Profesional

*/
get_header();
?>
<nav class="navbar navbar-light backgroud-dark shadow p-3 mb-5">
            <a class="navbar-brand font-color-white" href="#">
                <img src="static/img/logot.png"  height="30" class="d-inline-block align-top" alt="">
            </a>
        </a>
    </nav>

    <div class="container mt-5">
        <h2 class="text-center">Consulta General de tramites</h2>
        <div class="container mt-5">
            <form class="row ">
                <div class="form-row col-4 col-md-4 justify-content-center">
                    <div class="form-group">
                        <label class="text-green font-weight-bold">Año</label>
                        <input type="number" class="form-control" placeholder="Año">
                    </div>
                </div>
                <div class="form-row col-4 col-md-4 justify-content-center">
                    <div class="form-group">
                        <label class="text-green font-weight-bold">Tipo</label>
                        <select class="custom-select">
                            <option selected>Seleccione el tipo</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                    </div>
                </div>
                <div class="form-row col-4 col-md-4 justify-content-center">
                    <div class="form-group">
                        <label class="text-green font-weight-bold">Expediente</label>
                        <input type="text" class="form-control" placeholder="Expediente">
                    </div>
                </div>
                <div class="form-row col-4 col-md-4 justify-content-center">
                    <div class="form-group">
                        <label class="text-green font-weight-bold">Cod. barras</label>
                        <input type="number" class="form-control" placeholder="Cod. barras">
                    </div>
                </div>
                <div class="col-4 col-md-4 text-center align-self-center">
                    <button type="submit" class="btn btn-success ">Buscar</button>
                </div>
            </form>
        </div>
        <!-- aqui va el resultado -->
</div>
<?php
get_footer();