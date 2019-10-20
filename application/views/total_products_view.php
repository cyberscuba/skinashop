<div class="page-heade">
        <div class="container">
          <center><h3 class="display-6">PRODUCTOS DISPONIBLES</h3></center>
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
                        <h5 class="modal-title" id="exampleModalLabel">Agregar cantidades</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                    </div>
                <div class="modal-body">
               
                <form method="POST" action="<?php echo site_url('Total_products_controller/create');?>">

<!--                     <div class="form-group">
                        <label for="nombre_producto">Nombre producto</label>
                        <input type="text" class="form-control" name="id_producto" id="id_producto"  placeholder="Nombre producto">
                    </div> -->
                    
                    <?php echo form_label('Productos: '),form_dropdown('id_producto', $productos);?>


                    <div class="form-group">
                        <label for="cantidad_producto">Cantidad productos</label>
                        <input type="number" class="form-control" name="cantidad_producto" id="descripcion_producto"  placeholder="Cantidad producto">
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
                <th scope="col">Existencias</th>
                <th scope="col">Accion</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($result as $row) {?>
                <tr>
                <th scope="row"><?php echo $row->id_totales;?></th>
                <td><?php echo $row->id_producto;?></td>
                <td><?php echo $row->cantidad_producto;?></td>
                
                <td> 
                <a href="<?php echo site_url('total_products_controller/edit');?>/<?php echo $row->id_totales;?>">Editar</a>  | 
                <a href="<?php echo site_url('total_products_controller/delete');?>/<?php echo $row->id_totales;?>">Borrar</a> 
               
                </td>
                    </tr>
                    <?php } ?>
            </tbody>
            </table>
      </div>