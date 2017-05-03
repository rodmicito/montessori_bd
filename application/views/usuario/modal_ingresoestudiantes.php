 <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Ingresos</h4>
        </div>
        <div class="modal-body">
<!--          <p>Some text in the modal.</p>-->
        </div>

<!--              <div class="form-group">
                <label for="nivelJuego">Nivel de los jugadores</label>
                <input type="number" class="form-control" id="nivelJuego"  placeholder="2" required>
              </div>-->
                
                 <label for="nivelJuego">Perfil</label>
                  <select name="txtNombreId" class="form-control" id="nombreCliente">

                        <optgroup label="CABILDO">
                        <?php 
                        foreach ($listEstudiantesCabildo as $value) { 
                            $nombre=$value->INSCRITOS;
                       ?>
                          <option value="<?php echo $value->N?>"> <?php 
                           echo $nombre; 
                          ?> </option>
                          <?php }?>
                        </optgroup>
                        
                        <optgroup label="PACATA">
                        <?php 
                        foreach ($listEstudiantesPacata as $value) { 
                            $nombre=$value->INSCRITOS;
                       ?>
                          <option value="<?php echo $value->N?>"> <?php 
                           echo $nombre; 
                          ?> </option>
                        <?php } ?>
                        </optgroup>

                  </select>                    
                                    
                <div class="form-group">
                    <label for="exampleInputEmail1"  id="nombres">Nombre: </label>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1" id="MONTO">Monto a Cobrar: </label>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" id="LUGAR">LUGAR: </label>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1" id="TURNO">TURNO: </label>
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
            
            <input type="file" name="userfile" size="20" accept=".gif,.jpg,.jpeg,.png,.doc,.docx"/>
<!--                               </form>      
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                            <button type="button" class="btn btn-success" id="botonAventura" onClick="alert('Botón crear')">Crear</button>        
                          </div>
                        </div>
                      </div>
                    </div>-->

                  <!--hasta aqui-->

                  
<!--                </div>-->

        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Aceptar</button>
        </div>
      </div>
      
    </div>
  </div>