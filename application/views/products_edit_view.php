<?php $this->load->view('/includes/header_view')?>
<div class="container">
    <br>
    <br>
        <form method="post" action="<?php echo site_url('Products_controller/update')?>/<?php echo $row->id_producto; ?>">
            <div class="form-group">
                <label for="nombre_producto">Nombre producto</label>
                <input type="text" class="form-control" name="nombre_producto" value="<?php echo $row->nombre_producto; ?>" >
            </div>
            <div class="form-group">
                <label for="valor_producto">Valor producto</label>
                <input type="text" class="form-control" name="valor_producto" value="<?php echo $row->valor_producto; ?>" >
            </div>
            <div class="form-group">
                <label for="descripcion_producto">Descripcion producto</label>
                <input type="text" class="form-control" name="descripcion_producto" value="<?php echo $row->descripcion_producto; ?>" >
            </div>

                    <div class="form-group form-check">
                        <?php $checked = $row->es_activo == '1' ? 'checked' : '0'; ?>
                        <input type="hidden"   class="form-check-input" name="es_activo" value="0" id="es_activo" />
                        <input type="checkbox" class="form-check-input" name="es_activo" value="1" <?=$checked?> id="es_activo" />
                        <label class="form-check-label" for="es_activa">Producto activo</label>
                    </div>



            <button type="submit" class="btn btn-primary" value="save">Actualizar producto</button>
            <a href="<?php echo site_url('Products_controller')?>"><button type="button" class="btn btn-danger">Cancelar</button></a>
        </form>  
    </div>
<?php $this->load->view('/includes/footer_view')?>
