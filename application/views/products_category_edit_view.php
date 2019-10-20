<?php $this->load->view('/includes/header_view')?>
<div class="container">
    <br>
    <br>
        <form method="post" action="<?php echo site_url('Products_category_controller/update')?>/<?php echo $row->id_prodcat; ?>">
            <div class="form-group">
                <?php echo form_label('Categoria  '),form_dropdown('id_categoria', $categorias);?>
            </div>
            <div class="form-group">
                <?php echo form_label('Sub categoria  '),form_dropdown('id_subcategoria', $subcategorias);?>
            </div>
            <div class="form-group">
                <?php echo form_label('Producto  '),form_dropdown('id_product', $productos);?>
            </div>
                    <div class="form-group form-check">
                        <?php $checked = $row->es_activo == '1' ? 'checked' : '0'; ?>
                        <input type="hidden"   class="form-check-input" name="es_activo" value="0" id="es_activo" />
                        <input type="checkbox" class="form-check-input" name="es_activo" value="1" <?=$checked?> id="es_activo" />
                        <label class="form-check-label" for="es_activa">ACTIVA</label>
                    </div>



            <button type="submit" class="btn btn-primary" value="save">Actualizar producto categoria</button>
            <a href="<?php echo site_url('Category_sub_category_controller')?>"><button type="button" class="btn btn-danger">Cancelar</button></a>
        </form>  
    </div>
<?php $this->load->view('/includes/footer_view')?>
