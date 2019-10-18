<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Shop</title>

    <!-- Bootstrap core CSS -->
    <link href="../../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	

    <!-- Custom styles for this template -->
   <!-- <link href="jumbotron.css" rel="stylesheet">-->

  </head>

  <body>
      <nav class="navbar navbar-dark bg-dark">
          <a class="navbar-brad" href="#">CODEIGNITER</a>
      </nav>
      <div class="container">
        <br>
        <br>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Adicionar
</button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Adicionar categoria</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <form method="POST" action="<?php echo site_url("CrudController/create");?>">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nombre categoria</label>
                        <input type="text" class="form-control" name="nombre_producto" id="nombre_producto" aria-describedby="emailHelp" placeholder="Nombre categoria">
                        <small id="e_producto" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>

                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" name="es_activa" id="es_activa">
                        <label class="form-check-label" for="exampleCheck1">Activo</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary" value="save">Guardar cambios</button>
                </div>
                </div>
            </div>
            </div>



      <table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre categoria</th>
            <th scope="col">Descripcion categoria</th>
            <th scope="col">Activa</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row"></th>
            <td></td>
            <td></td>
            <td></td>
            </tr>
        </tbody>
        </table>
      </div>

      
   

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
  </body>
  </html>