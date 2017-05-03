/'
<!--Aquí estará el Crud de Usuario-->




<div>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">CONSULTA</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">REGISTRO</a></li>    
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
      <div role="tabpanel" class="tab-pane active" id="home">
          
          <table class="table table-hover">
              
              <thead>
              
              <th>
                            
                  <!--id-->
                   <div class="dropdown">
                    <button class="btn btn-success dropdown-toggle btn-xs" type="button" id="dropdownMenu1"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                      <strong>ID</strong>
                      <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                      <li><a href="<?php echo base_url('usuario/reordenar')."/CUARTO/ASC"; ?>">Ascendente</a></li>
                      <li><a href="<?php echo base_url('usuario/reordenar')."/CUARTO/DESC"; ?>">Descendente</a></li>
                    </ul>
                  </div>
                </div> 
              </th>
              
              <th>Concepto</th>
              
              <th>
                  <!--Dia Cobro-->
                  <div class="dropdown">
                    <button class="btn btn-success dropdown-toggle btn-xs" type="button" id="dropdownMenu1"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                      <strong>Monto</strong>
                      <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                      <li><a href="<?php echo base_url('usuario/reordenar')."/DiaCobro/ASC"; ?>">Ascendente</a></li>
                      <li><a href="<?php echo base_url('usuario/reordenar')."/DiaCobro/DESC"; ?>">Descendente</a></li>
                    </ul>
                  </div>
                </div>  
              </th>
              
              <th>
                  <!--Cuarto-->
                   <div class="dropdown">
                    <button class="btn btn-success dropdown-toggle btn-xs" type="button" id="dropdownMenu1"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                      <strong>Fecha</strong>
                      <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                      <li><a href="<?php echo base_url('usuario/reordenar')."/CUARTO/ASC"; ?>">Ascendente</a></li>
                      <li><a href="<?php echo base_url('usuario/reordenar')."/CUARTO/DESC"; ?>">Descendente</a></li>
                    </ul>
                  </div>
                </div> 
              </th>
              
               
              <th><center>Acciones</center></th>
           
            </thead>
                
              <tbody>
                  <?php 
                  
                  $TotalMonto=0;
                  
                  foreach ($listaUsuario as $value) {                 
                      ?>
                  <tr>
                      <td><?php echo $value->N; ?></td>
                      <td><?php echo $value->DESCRIPCION; ?></td>
                      <td><?php echo $value->MONTO; ?></td>
                      <td><?php echo $value->FECHA; ?></td>                      
                      <td> 
                            <center>
                              <a href="<?php 
                              echo base_url('usuario/editgastos')."/".$value->N; 
                              ?>" title="Editar"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                          </center>
                      </td>                     
                  </tr>
                      <?php 
                      }
                      $q=8;
                  ?>
              </tbody>
                <tfoot>
                    <tr>
                      <td>Totales</td>

                      <td></td>
                      <td><?php 
                      echo $TotalMonto 
                              ?></td>
 
                    </tr>
                </tfoot>
          </table>
          
      </div>
      
      <div role="tabpanel" class="tab-pane" id="profile">
          <div class="row">
              <div class="col-md-7">
                  <form method="POST" action="<?php echo base_url('usuario/insertgastos')?>">
            <div class="form-group">
              <label for="exampleInputEmail1">N</label>
              
              <select name="txtIdper" class="form-control">
                  <?php foreach ($listaUsuario as $value) { ?>
                      <option value="<?php 
                      echo $value->N
                              ?>"> <?php echo $value->N; ?> </option>    
                  <?php } ?>

              </select>
            </div>
            
<!--            <div class="form-group">
              <label for="exampleInputEmail1">N</label>
              <input type="text" name="txtId" class="form-control" id="exampleInputEmail1" placeholder="n">
            </div>-->
              <div class="form-group">
              <label for="exampleInputEmail1">DESCRIPCION</label>
              <input type="text" name="txtDescripcion" class="form-control" id="exampleInputEmail1" placeholder="descripcion">
            </div>
              <div class="form-group">
              <label for="exampleInputEmail1">MONTO</label>
              <input type="text" name="txtMonto" class="form-control" id="exampleInputEmail1" placeholder="monto">
            </div>

            <label for="exampleInputEmail1">FECHA</label>
              <div class='input-group date' id='divMiCalendario'>
                  <input type='text' name="txtFecha" id="Fecha" class="form-control" placeholder="fecha" />
                  <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                  </span>
              </div>
                      

           <script type="text/javascript">
             $('#divMiCalendario').datetimepicker({
                  format: 'YYYY-MM-DD HH:mm:ss'       
              });
              //$('#divMiCalendario').data("DateTimePicker").show();
           </script>             <!--FIN -->
 
            <button type="submit" class="btn btn-default">Registrar Usuario</button>
          </form>
              </div>
              <div class="col-md-5">
                  
              </div>
          </div>
          
          
      </div>
  </div>

</div>


