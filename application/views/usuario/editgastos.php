<div class="row">
    <div class="col-md-7 col-md-offset-2">
        <form method="POST" action="<?php 
        echo base_url('usuario/updategastos')
        ?>">
            <?php 
            foreach ($datosUsuario as $value) { 
                ?>
                
            <input type="hidden" name="txtUsuid" value="<?php echo $value->N; ?>">
            <div class="form-group">
              <label for="exampleInputEmail1">Gastos</label>              
              
              
            </div>
              <div class="form-group">
              <label for="exampleInputEmail1">ID</label>
              <input type="text" name="txtId" class="form-control" id="exampleInputEmail1" value="<?php echo $value->N; ?>">
            </div>
              <div class="form-group">
              <label for="exampleInputEmail1">DESCRIPCION</label>
              <input type="text" name="txtDescripcion" class="form-control" id="exampleInputEmail1" value="<?php echo $value->DESCRIPCION;?>">
            </div>
             <div class="form-group">
              <label for="exampleInputEmail1">MONTO</label>
              <input type="text" name="txtMonto" class="form-control" id="exampleInputEmail1" value="<?php echo $value->MONTO;?>">
            </div>
            
             <label for="exampleInputEmail1">FECHA</label>
              <div class='input-group date' id='divMiCalendario'>
                  <input type='text' name="txtFecha" id="Fecha" class="form-control" placeholder="fecha" value="<?php echo $value->FECHA;?>"/>
                  <span class="input-group-addon"><span class="glyphicon glyphicon-calendar" ></span>
                  </span>
              </div>
       
           
<!--            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
           <script src=<?php //echo base_url('public/js/moment.min.js')?></script>
           <script src=<?php //echo base_url('public/js/bootstrap-datetimepicker.min.js')?></script>
           <script src=<?php //echo base_url('public/js/bootstrap-datetimepicker.es.js')?></script>-->
           <script type="text/javascript">
             $('#divMiCalendario').datetimepicker({
                  format: 'YYYY-MM-DD HH:mm:ss'       
              });
//              
           </script>             
            
         <?php } ?>
            <button type="submit" class="btn btn-default">Actualizar Usuario</button>
          </form>
    </div>
    
</div>
        



