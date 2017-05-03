            <?php echo form_open_multipart('ingresos/registrar');?>
                <div class="form-group">
                  <label for="exampleInputEmail1">Perfil</label>
                  <select name="txtNombreId" class="form-control" id="nombreApellido">
                      <?php 
                        foreach ($listaInquilinas as $value) { 
                            $nombre=$value->NOMBRE .' '.$value->APELLIDOPATERNO;
                            $longitud=strlen($nombre);
                            if($longitud>4){
                       ?>
                          <option value="<?php echo $value->N?>"> <?php 
                           echo $nombre; 
                          ?> </option>    
                        <?php }} ?>

                  </select>
                  
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1"  id="nombres">Nombre: </label>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" id="DiaCobro">Dia de Cobro: </label>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" id="ULTIMOMESPAGO">Ultimo Mes de Pago: </label>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" id="MONTO">Monto a Cobrar: </label>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" id="CUARTO">Cuarto: </label>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" id="DEUDA">Deuda: </label>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" id="telefono">Telefono: </label>
                </div>
            <div class="form-group">
            <label for="exampleInputEmail1">Mes a Pagar</label>
                    <?php 
                      $options = array(
                                '1'       => 'ENERO',
                                '2'       => 'FEBRERO',
                                '3'       => 'MARZO',
                                '4'       => 'ABRIL',
                                '5'       => 'MAYO',
                                '6'       => 'JUNIO',
                                '7'       => 'JULIO',
                                '8'       => 'AGOSTO',
                                '9'       => 'SEPTIEMBRE',
                                '10'      => 'OCTUBRE',
                                '11'      => 'NOVIEMBRE',
                                '12'      => 'DICIEMBRE',
                        );
                   echo form_dropdown('txtFechaPago',$options, 'class="form-control"');
                  ?>
                  
                </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Efectivo: </label>
              <input type="text" name="txtEfectivo" class="form-control" id="exampleInputPassword1" placeholder="Efectivo Pagado">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Deuda: </label>
              <input type="text" name="txtDeuda" class="form-control" id="exampleInputPassword1" placeholder="Deuda">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Comprobante</label>
            </div>
            <input type="file" name="userfile" size="20" accept=".gif,.jpg,.jpeg,.png,.doc,.docx"/>
            <input type="submit" value="pagos" />
          </form>

