<div class="page-heade">
        <div class="container">
          <center><h3 class="display-6">CATEGORIAS</h3></center>
        </div>
</div>
<div class="container">
        <br>
        <br>

<!--id_categoria, nombre_categoria, es_activa FROM categorias-->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Adicionar
</button>
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
               
                <form method="POST" action="<?php echo site_url('Categories_controller/create');?>">

                    <div class="form-group">
                        <label for="nombre_categoria">Nombre categoria</label>
                        <input type="text" class="form-control" name="nombre_categoria" id="nombre_categoria"  placeholder="Nombre categoria">
                    </div>

                    <div class="form-group form-check">
                        <input type="hidden"   class="form-check-input" name="es_activa" value="0" id="es_activa" />
                        <input type="checkbox" class="form-check-input" name="es_activa" value="1" id="es_activa" />

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
                <th scope="col">Nombre categoria</th>
                <th scope="col">Estado categoria</th>
                <th scope="col">Accion</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($result as $row) {?>
                <tr>
                <th scope="row"><?php echo $row->id_categoria;?></th>
                <td><?php echo $row->nombre_categoria;?></td>
                <td><?php echo $row->es_activa;?></td>
                <td> 
                <a href="<?php echo site_url('Categories_controller/edit');?>/<?php echo $row->id_categoria;?>">Editar</a>  | 
                <a href="<?php echo site_url('Categories_controller/delete');?>/<?php echo $row->id_categoria;?>">Borrar</a> 
               
                </td>
                    </tr>
                    <?php } ?>
            </tbody>
            </table>
      </div>