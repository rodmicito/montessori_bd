<div class="row">
    <div class="col-md-7 col-md-offset-2">
        
        <form method="POST" action="<?php echo base_url('usuario/updateservicios')?>">
            <?php foreach ($datosUsuario as $value) { ?>
                
            <div class="form-group">
              <label for="exampleInputEmail1">ID</label>
              <input type="text" name="txtId" class="form-control" id="exampleInputEmail1" value="<?php echo $value->N; ?>">
            </div>
              
            <div class="form-group">
              <label for="exampleInputEmail1">TIPO</label>
              <input type="text" name="txtTipo" class="form-control" id="exampleInputEmail1" value="<?php echo $value->TIPO; ?>">
            </div>
              <div class="form-group">
              <label for="exampleInputEmail1">DESCRIPCION</label>
              <input type="text" name="txtDescripcion" class="form-control" id="exampleInputEmail1" value="<?php echo $value->DESCRIPCION;?>">
            </div>
              <div class="form-group">
              <label for="exampleInputEmail1">CODIGO</label>
              <input type="text" name="txtCodigo" class="form-control" id="exampleInputEmail1" value="<?php echo $value->CODIGO;?>">
            </div>

            <div class="form-group">
              <label for="exampleInputPassword1">ENERO</label>
              <input type="text" name="txtEnero" class="form-control" id="exampleInputPassword1" value="<?php echo $value->ENERO;?>">
            </div>  
            
            <div class="form-group">
              <label for="exampleInputPassword1">FEBRERO</label>
              <input type="text" name="txtFebrero" class="form-control" id="exampleInputPassword1" value="<?php echo $value->FEBRERO;?>">
            </div>  
            <div class="form-group">
              <label for="exampleInputPassword1">MARZO</label>
              <input type="text" name="txtMarzo" class="form-control" id="exampleInputPassword1" value="<?php echo $value->MARZO;?>">
            </div>  
            <div class="form-group">
              <label for="exampleInputPassword1">ABRIL</label>
              <input type="text" name="txtAbril" class="form-control" id="exampleInputPassword1" value="<?php echo $value->ABRIL;?>">
            </div>  
            <div class="form-group">
              <label for="exampleInputPassword1">MAYO</label>
              <input type="text" name="txtMayo" class="form-control" id="exampleInputPassword1" value="<?php echo $value->MAYO;?>">
            </div>  
            
            <div class="form-group">
              <label for="exampleInputPassword1">JUNIO</label>
              <input type="text" name="txtJunio" class="form-control" id="exampleInputPassword1" value="<?php echo $value->JUNIO;?>">
            </div>  
            <div class="form-group">
              <label for="exampleInputPassword1">JULIO</label>
              <input type="text" name="txtJulio" class="form-control" id="exampleInputPassword1" value="<?php echo $value->JULIO;?>">
            </div>  
            <div class="form-group">
              <label for="exampleInputPassword1">AGOSTO</label>
              <input type="text" name="txtAgosto" class="form-control" id="exampleInputPassword1" value="<?php echo $value->AGOSTO;?>">
            </div>
                         <div class="form-group">
              <label for="exampleInputPassword1">SEPTIEMBRE</label>
              <input type="text" name="txtSeptiembre" class="form-control" id="exampleInputPassword1" value="<?php echo $value->SEPTIEMBRE;?>">
            </div>  
            
            <div class="form-group">
              <label for="exampleInputPassword1">OCTUBRE</label>
              <input type="text" name="txtOctubre" class="form-control" id="exampleInputPassword1" value="<?php echo $value->OCTUBRE;?>">
            </div>  
            <div class="form-group">
              <label for="exampleInputPassword1">NOVIEMBRE</label>
              <input type="text" name="txtNoviembre" class="form-control" id="exampleInputPassword1" value="<?php echo $value->NOVIEMBRE;?>">
            </div>  
            <div class="form-group">
              <label for="exampleInputPassword1">DICIEMBRE</label>
              <input type="text" name="txtDiciembre" class="form-control" id="exampleInputPassword1" value="<?php echo $value->DICIEMBRE;?>">
            </div> 
            
    <?php } ?>
            <button type="submit" class="btn btn-default">Actualizar Usuario</button>
       </form>
    </div>
    
</div>
        

