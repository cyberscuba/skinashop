<div class="page-heade">
        <div class="container">
          <center><h3 class="display-6">PRODUCTOS</h3></center>
        </div>
</div>
<div class="container">
        <br>
        <br>

<!--id_producto, nombre_producto, descripcion_producto, es_activo-->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Adicionar
</button>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Adicionar productos</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                    </div>
                <div class="modal-body">
               
                <form method="POST" action="<?php echo site_url('Products_controller/create');?>">

                    <div class="form-group">
                        <label for="nombre_producto">Nombre producto</label>
                        <input type="text" class="form-control" name="nombre_producto" id="nombre_producto"  placeholder="Nombre producto">
                    </div>

                    <div class="form-group">
                        <label for="valor_producto">Valor producto</label>
                        <input type="number" class="form-control" name="valor_producto" id="valor_producto"  placeholder="Valor producto">
                    </div>
                    <div class="form-group">
                        <label for="descripcion_producto">Descripcion producto</label>
                        <input type="text" class="form-control" name="descripcion_producto" id="descripcion_producto"  placeholder="Descripcion producto">
                    </div>

                    <div class="form-group form-check">
                        <input type="hidden"   class="form-check-input" name="es_activo" value="0" id="es_activo" />
                        <input type="checkbox" class="form-check-input" name="es_activo" value="1" id="es_activo" />

                        <label class="form-check-label" for="es_activa">Activa</label>
                    </div>

                    <button type="submit" class="btn btn-primary">Guardar</button>
                    
                    </form>
                </div>
<!--                 <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary" value="save">Guardar cambios</button>
                </div> -->
                </div>
            </div>
</div>      

            <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre producto</th>
                <th scope="col">Valor producto</th>
                <th scope="col">Descripcion producto</th>
                <th scope="col">Estado producto</th>
                <th scope="col">Accion</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($result as $row) {?>
                <tr>
                <th scope="row"><?php echo $row->id_producto;?></th>
                <td><?php echo $row->nombre_producto;?></td>
                <td><?php echo $row->valor_producto;?></td>
                <td><?php echo $row->descripcion_producto;?></td>
                <td><?php echo $row->es_activo;?></td>
                <td> 
                <a href="<?php echo site_url('products_controller/edit');?>/<?php echo $row->id_producto;?>">Editar</a>  | 
                <a href="<?php echo site_url('products_controller/delete');?>/<?php echo $row->id_producto;?>">Borrar</a> 
               
                </td>
                    </tr>
                    <?php } ?>
            </tbody>
            </table>
      </div>