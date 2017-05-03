            <?php echo form_open_multipart('ingresos/registrar');?>
                <div class="form-group">
                  

    <div class="container">

    <div class="form-group">
        <label for="exampleInputEmail1">Tipo de Ingreso:</label>
                <?php 
                  $opciones = array(
                            'PENSIONES'    => 'INGRESOS PENSIONES ESTUDIANTES',
                            'TEXTOS'       => 'INGRESOS VENTA TEXTOS',
                            'UNIFORME'     => 'INGRESOS VENTAS UNIFORME',
                            'REPOSICION'   => 'INGRESOS REPOSICION MATERIALES',
                            'VARIOS'       => 'INGRESOS VARIOS',

                    );
               echo form_dropdown('ingresosTipo',$opciones, 'class="form-control"','id="myId"');
              ?>

            </div>
      <!--<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>-->
    <button type="button" id="myButton" data-loading-text="Loading..." class="btn btn-primary" autocomplete="off" value="redes">
      Formulario
    </button>
      <!--otra modal inicial-->
      <div class="modal fade" id="mostrarmodal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
       <div class="modal-dialog">
          <div class="modal-content">
             <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3>Cabecera de la ventana</h3>
         </div>
             <div class="modal-body">
                <h4>Texto de la ventana</h4>
                Mas texto en la ventana.    
         </div>
             <div class="modal-footer">
            <a href="#" data-dismiss="modal" class="btn btn-danger">Cerrar</a>
         </div>
          </div>
       </div>
    </div>
      <!--final modal-->
      <!-- Modal -->
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

                     <label for="nivelJuego">Perfil</label>
                      <select name="txtNombreId" class="form-control" id="nombreApellido">

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

                            <optgroup label="PACATA" id="nombreEstudiante1">
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
                    <label for="exampleInputEmail1">Fecha de Facturacion:</label>

                                <div class='input-group date' id='datetimepicker1'>
                                    <input type='text' class="form-control" id="txtFechaPago" name="txtFechaPago"/>
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>

                    </div>


                <div class="form-group">
                  <label for="exampleInputPassword1">Efectivo: </label>
                  <input type="text" name="txtEfectivo" class="form-control" id="txtEfectivo" placeholder="Efectivo Pagado">
                </div>

                <input type="file" name="userfile" size="20" accept=".gif,.jpg,.jpeg,.png,.doc,.docx"/>

            <div class="modal-footer">
              <button type="button" class="btn btn-default"  id="prueba" data-dismiss="modal">Aceptar</button>
            </div>
          </div>

        </div>
      </div>

    </div>

    <!--</body>-->

    <!--inicio formulario revision-->
                    <div class="form-group">
                        <label for="exampleInputEmail1"  id="nombreestudiante">Nombre: </label>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"  id="fechaacobrar">Fecha: </label>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"  id="mensualidad">Mensualidad: </label>
                    </div>
    <!--fin revision-->


                <input type="submit" class="btn btn-primary" value="Aceptar" />
              </form>
</div>

