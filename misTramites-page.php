<?php 
/**
* Template Name: Mis Tramites

*/
get_header();
?>
<nav class="navbar navbar-light backgroud-dark shadow p-3 mb-5">
            <a class="navbar-brand font-color-white" href="#">
                <img src="static/img/logot.png"  height="30" class="d-inline-block align-top" alt="">
            </a>
        </a>
    </nav>
    <div class="container mt-5 mb-5">
      <h2 class="text-center">Mis Tramites</h2>
      <div class="container mt-5">
        <div class="card text-center">
          <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
              <li class="nav-item">
                <a class="nav-link active" href="#">En proceso</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Finalizados</a>
              </li>
            </ul>
          </div>
          <div class="card-body">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Categoria</th>
                  <th scope="col">Tipo</th>
                  <th scope="col">Expediente</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Permiso</td>
                  <td>145</td>
                </tr>
                <tr>
                  <th scope="row">1</th>
                  <td>Permiso</td>
                  <td>145</td>
                </tr>
                <tr>
                  <th scope="row">1</th>
                  <td>Permiso</td>
                  <td>145</td>
                </tr>
                <tr>
                  <th scope="row">1</th>
                  <td>Permiso</td>
                  <td>145</td>
                </tr>
                <tr>
                  <th scope="row">1</th>
                  <td>Permiso</td>
                  <td>145</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
    </div>
<?php
get_footer();