<?php $this->load->view('/includes/header_view')?>
<div class="container">
    <br>
    <br>
        <form method="post" action="<?php echo site_url('Category_sub_category_controller/update')?>/<?php echo $row->id_catsub; ?>">
            <div class="form-group">
                <?php echo form_label('Categoria  '),form_dropdown('id_categoria', $categorias);?>
            </div>
            <div class="form-group">
                <?php echo form_label('Sub categoria  '),form_dropdown('id_sub_categoria', $subcategorias);?>
            </div>
            <div class="form-group">
                <label for="cantidad_producto">Descripcion</label>
                        <input type="text" class="form-control" name="descripcion" id="descripcion"  value="<?php echo $row->descripcion; ?>" placeholder="Descripción">
                    </div>

                    <div class="form-group form-check">
                        <?php $checked = $row->es_activa == '1' ? 'checked' : '0'; ?>
                        <input type="hidden"   class="form-check-input" name="es_activa" value="0" id="es_activa" />
                        <input type="checkbox" class="form-check-input" name="es_activa" value="1" <?=$checked?> id="es_activa" />
                        <label class="form-check-label" for="es_activa">ACTIVA</label>
                    </div>



            <button type="submit" class="btn btn-primary" value="save">Actualizar combo</button>
            <a href="<?php echo site_url('Category_sub_category_controller')?>"><button type="button" class="btn btn-danger">Cancelar</button></a>
        </form>  
    </div>
<?php $this->load->view('/includes/footer_view')?>
