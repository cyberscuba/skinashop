<?php $this->load->view('includes/header');?>
    <div class="container">
    <br>
    <br>
        <form method="post" action="<?php echo site_url('CrudController/update')?>/<?php echo $row->id_categoria; ?>">
            <div class="form-group">
                <label for="nombre_categoria">Last Name</label>
                <input type="text" class="form-control" name="nombre_categoria" value="<?php echo $row->nombre_categoria; ?>" aria-describedby="emailHelp" placeholder="Enter last name">
            </div>
            <div class="form-group">
                <label for="es_activa">Es activa</label>
                <input type="text" class="form-control" name="es_activa" value="<?php echo $row->es_activa; ?>" aria-describedby="emailHelp" placeholder="Enter first name">
            </div>

            <button type="submit" class="btn btn-primary" value="save">Submit</button>
            <a href="<?php echo site_url('CrudController')?>"><button type="button" class="btn btn-danger">Cancel</button></a>
        </form>  
    </div>


  </body>
</html>