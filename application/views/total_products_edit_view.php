<?php $this->load->view('/includes/header_view')?>
<div class="container">
    <br>
    <br>
        <form method="post" action="<?php echo site_url('Total_products_controller/update')?>/<?php echo $row->id_totales; ?>">
            <div class="form-group">
                <label for="id_producto">Nombre producto</label>
                <input type="text" class="form-control" name="id_producto" value="<?php echo $row->id_producto; ?>" >
            </div>
            <div class="form-group">
                <label for="cantidad_producto">Cantidad producto</label>
                <input type="text" class="form-control" name="cantidad_producto" value="<?php echo $row->cantidad_producto; ?>" >
            </div>


            <button type="submit" class="btn btn-primary" value="save">Actualizar producto</button>
            <a href="<?php echo site_url('Total_products_controller')?>"><button type="button" class="btn btn-danger">Cancelar</button></a>
        </form>  
    </div>
<?php $this->load->view('/includes/footer_view')?>
