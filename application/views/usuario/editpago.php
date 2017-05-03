
<div class="row">
    <div class="col-md-7 col-md-offset-2">
        <!--<form method="POST" action="<?php //echo base_url('usuario/updatepago')?>">-->
        <?php 
            foreach ($listaCombinado as $value) {
            $hidden = array($value->NOMBRE ." ".$value->APELLIDOPATERNO);
        ?>
        
        <?php echo form_open_multipart('usuario/updatepago','',$hidden);?>
        
            <?php //foreach ($listaCombinado as $value) { ?>
            <div class="form-group">
              <label for="exampleInputEmail1">N</label>
              <input type="text" name="txtN" class="form-control" id="exampleInputEmail1" value="<?php echo $value->N; ?>" readonly>
            </div>
            
            <div class="form-group">
              <label for="exampleInputEmail1">Cuarto</label>
              <input type="text" name="txtCuarto" class="form-control" id="exampleInputEmail1" value="<?php echo $value->CUARTOId; ?>" readonly>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">NOMBRE: </label>
              
              <?php 
                    $nombre=$value->NOMBRE ." ".$value->APELLIDOPATERNO;
                    echo ($nombre );
                    
               ?>
<!--              <input type="text" name="txtNombre" class="form-control" id="exampleInputEmail1" value="<?php echo $value->NOMBRE;?>">-->
<!--            </div>
              <div class="form-group">
              <label for="exampleInputEmail1">APELLIDO</label>
              <input type="text" name="txtApellido" class="form-control" id="exampleInputEmail1" value="<?php echo $value->APELLIDOPATERNO;?>">
            </div>-->

            <div class="form-group">
              <label for="exampleInputPassword1">DIA DE COBRO: </label>
              <!--<input type="text" name="txtDiaCobro" class="form-control" id="exampleInputPassword1" value="<?php //echo $value->DiaCobro;?>">-->
               <?php 
                    $cobro=$value->DiaCobro;
                    echo ($cobro);
               ?>
            </div>
           <div class="form-group">
              <label for="exampleInputPassword1">MONTO: </label>
               <?php 
                    $monto=$value->MONTO;
                    echo ($monto);
               ?>
              <!--<input type="text" name="txtMonto" class="form-control" id="exampleInputPassword1" value="<?//php echo $value->MONTO;?>">-->
            </div>  
            <div class="form-group">
              <label for="exampleInputPassword1">DEUDA</label>
              <input type="text" name="txtDeuda" class="form-control" id="exampleInputPassword1" value="<?php echo $value->DEUDA;?>">
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
            
            <div class="form-group">
              <label for="exampleInputPassword1">Comprobante</label>
              <input type="file" name="userfile" size="20" accept=".gif,.jpg,.jpeg,.png,.doc,.docx"/>
            </div> 
              
    <?php } ?>
            <button type="submit" class="btn btn-default">Actualizar Usuario</button>
          </form>
    </div>
    
</div>
        

