<?php $this->load->view('/includes/header_view')?>
<div class="container">
    <br>
    <br>
        <form method="post" action="<?php echo site_url('Subcategories_controller/update')?>/<?php echo $row->id_subcategoria; ?>">
            <div class="form-group">
                <label for="nombre_subcategoria">Nombre categoria</label>
                <input type="text" class="form-control" name="nombre_subcategoria" value="<?php echo $row->nombre_subcategoria; ?>" >
            </div>

                    <div class="form-group form-check">
                        <?php $checked = $row->es_activa == '1' ? 'checked' : '0'; ?>
                        <input type="hidden"   class="form-check-input" name="es_activa" value="0" id="es_activa" />
                        <input type="checkbox" class="form-check-input" name="es_activa" value="1" <?=$checked?> id="es_activa" />
                        <label class="form-check-label" for="es_activa">Subcategoria activa</label>
                    </div>



            <button type="submit" class="btn btn-primary" value="save">Actualizar subcategoria</button>
            <a href="<?php echo site_url('Categories_controller')?>"><button type="button" class="btn btn-danger">Cancelar</button></a>
        </form>  
    </div>
<?php $this->load->view('/includes/footer_view')?>
