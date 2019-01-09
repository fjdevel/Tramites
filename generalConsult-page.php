<?php 
/**
* Template Name: Consulta general

*/
get_header();
?>
<nav class="navbar navbar-light backgroud-dark shadow p-3 mb-5">
            <a class="navbar-brand font-color-white" href="#">
            <img src="<?php echo get_template_directory_uri().'/assets/static/img/logot.png'; ?>"  height="30" class="d-inline-block align-top" alt="">

            </a>
        
</nav>
    <div class="container mt-5">
        <h2 class="text-center">Consulta General de tramites</h2>
        <div class="container mt-5">
            <form class="row ">
                <div class="form-row col justify-content-center">
                    <div class="form-group">
                        <label class="text-green font-weight-bold">Año</label>
                        <input type="number" class="form-control" placeholder="Año">
                    </div>
                </div>
                <div class="form-row col justify-content-center">
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
                <div class=" col">
                    <button type="submit" class="btn btn-success">Buscar</button>
                </div>
            </form>
        </div>
        <div class="container mt-5">
            <table class="table table-hover">
                <thead>
                  <tr>
                    <th class="text-blue" scope="col">Numero de Expediente</th>
                    <th class="text-blue" scope="col">Estado de Tramite</th>
                    <th class="text-blue" scope="col">Ubicación</th>
                    <th class="text-blue" scope="col">Tiempo Promedio de Respuesta</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">785</th>
                    <td>Ingresada</td>
                    <td>San Salvador</td>
                    <td>4 dias</td>
                  </tr>
                  <tr>
                    <th scope="row">785</th>
                    <td>Ingresada</td>
                    <td>San Salvador</td>
                    <td>4 dias</td>
                  </tr>
                  <tr>
                    <th scope="row">785</th>
                    <td>Ingresada</td>
                    <td>San Salvador</td>
                    <td>4 dias</td>
                  </tr>
                  <tr>
                    <th scope="row">785</th>
                    <td>Ingresada</td>
                    <td>San Salvador</td>
                    <td>4 dias</td>
                  </tr>
                  <tr>
                    <th scope="row">785</th>
                    <td>Ingresada</td>
                    <td>San Salvador</td>
                    <td>4 dias</td>
                  </tr>
                  <tr>
                    <th scope="row">785</th>
                    <td>Ingresada</td>
                    <td>San Salvador</td>
                    <td>4 dias</td>
                  </tr>
                  <tr>
                    <th scope="row">785</th>
                    <td>Ingresada</td>
                    <td>San Salvador</td>
                    <td>4 dias</td>
                  </tr>
                </tbody>
              </table>
              <div class="row justify-content-center">
                <nav>
                    <ul class="pagination">
                      <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                  </nav>
              </div>
        </div>
    </div>
<?php
get_footer();