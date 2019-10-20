<div class="page-heade">
        <div class="container">
          <center><h3 class="display-6">PRODUCTOS POR CATEGORIAS</h3></center>
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
                        <h5 class="modal-title" id="exampleModalLabel">Agregar producto categoria</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                    </div>
                <div class="modal-body">
               
                <form method="POST" action="<?php echo site_url('Products_category_controller/create');?>">

                    <div class="form-group">
                        <?php echo form_label('Categoria  '),form_dropdown('id_categoria', $categorias);?>
                    </div>
                    <div class="form-group">
                        <?php echo form_label('Sub categoria  '),form_dropdown('id_subcategoria', $subcategorias);?>
                    </div>
                    <div class="form-group">
                        <?php echo form_label('Productos  '),form_dropdown('id_product', $productos);?>
                    </div>
                    <div class="form-group form-check">
                        <input type="hidden"   class="form-check-input" name="es_activo" value="0" id="es_activo" />
                        <input type="checkbox" class="form-check-input" name="es_activo" value="1" id="es_activo" />

                        <label class="form-check-label" for="es_activa">Activo</label>
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
                <th scope="col">Categoria</th>
                <th scope="col">Sub Categoria</th>
                <th scope="col">Producto</th>
                <th scope="col">Valor</th>
                <th scope="col">Accion</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($result as $row) {?>
                <tr>
                <th scope="row"><?php echo $row->id_prodcat;?></th>
                <td><?php echo $row->id_categoria;?></td>
                <td><?php echo $row->id_subcategoria;?></td>
                <td><?php echo $row->id_product;?></td>
                <td><?php echo $row->valor_producto;?></td>
                
                
                <td> 
                <a href="<?php echo site_url('Products_category_controller/edit');?>/<?php echo $row->id_prodcat;?>">Editar</a>  | 
                <a href="<?php echo site_url('Products_category_controller/delete');?>/<?php echo $row->id_prodcat;?>">Borrar</a> 
               
                </td>
                    </tr>
                    <?php } ?>
            </tbody>
            </table>
      </div>