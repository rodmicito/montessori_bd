<div>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">CONSULTA</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Nuevo</a></li>
    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Egresos</a></li>
    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Ingresos</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home">
        <table class="table table-hover">
              
              <thead>
              
              <th>ID</th>
              <th>Nombre</th>
              <th>Apellido</th>
              <th>
                  <!--Dia Cobro-->
                  <div class="dropdown">
                    <button class="btn btn-success dropdown-toggle btn-xs" type="button" id="dropdownMenu1"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                      <strong>Dia</strong>
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
                      <strong>Cuar</strong>
                      <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                      <li><a href="<?php echo base_url('usuario/reordenar')."/CUARTO/ASC"; ?>">Ascendente</a></li>
                      <li><a href="<?php echo base_url('usuario/reordenar')."/CUARTO/DESC"; ?>">Descendente</a></li>
                    </ul>
                  </div>
                </div> 
              </th>
              
              <th>
                  <div class="dropdown">
                    <button class="btn btn-success dropdown-toggle btn-xs" type="button" id="dropdownMenu1"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                      <strong>Monto</strong>
                      <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                      <li><a href="<?php echo base_url('usuario/reordenar')."/MONTO/ASC"; ?>">Ascendente</a></li>
                      <li><a href="<?php echo base_url('usuario/reordenar')."/MONTO/DESC"; ?>">Descendente</a></li>
                    </ul>
                  </div>
                </div> 
              </th>
              
              <th>
                   <div class="dropdown">
                    <button class="btn btn-success dropdown-toggle btn-xs" type="button" id="dropdownMenu1"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                      <strong>Ene</strong>
                      <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                      <li><a href="<?php echo base_url('usuario/reordenar')."/ENERO/ASC"; ?>">Ascendente</a></li>
                      <li><a href="<?php echo base_url('usuario/reordenar')."/ENERO/DESC"; ?>">Descendente</a></li>
                    </ul>
                  </div>
                </div>              
              </th>
              
              <th>
                   <div class="dropdown">
                    <button class="btn btn-success dropdown-toggle btn-xs" type="button" id="dropdownMenu1"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                      <strong>Feb</strong>
                      <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                      <li><a href="<?php echo base_url('usuario/reordenar')."/FEBRERO/ASC"; ?>">Ascendente</a></li>
                      <li><a href="<?php echo base_url('usuario/reordenar')."/FEBRERO/DESC"; ?>">Descendente</a></li>
                    </ul>
                  </div>
                </div>              
              </th>
              
              <th>
                   <div class="dropdown">
                    <button class="btn btn-success dropdown-toggle btn-xs" type="button" id="dropdownMenu1"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                      <strong>Mar</strong>
                      <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                      <li><a href="<?php echo base_url('usuario/reordenar')."/MARZO/ASC"; ?>">Ascendente</a></li>
                      <li><a href="<?php echo base_url('usuario/reordenar')."/MARZO/DESC"; ?>">Descendente</a></li>
                    </ul>
                  </div>
                </div>                   
              </th>
              
              <th>
                   <div class="dropdown">
                    <button class="btn btn-success dropdown-toggle btn-xs" type="button" id="dropdownMenu1"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                      <strong>Abr</strong>
                      <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                      <li><a href="<?php echo base_url('usuario/reordenar')."/ABRIL/ASC"; ?>">Ascendente</a></li>
                      <li><a href="<?php echo base_url('usuario/reordenar')."/ABRIL/DESC"; ?>">Descendente</a></li>
                    </ul>
                  </div>
                </div>                   
              </th>
              
              <th>
                  <div class="dropdown">
                    <button class="btn btn-success dropdown-toggle btn-xs" type="button" id="dropdownMenu1"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                      <strong>May</strong>
                      <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                      <li><a href="<?php echo base_url('usuario/reordenar')."/MAYO/ASC"; ?>">Ascendente</a></li>
                      <li><a href="<?php echo base_url('usuario/reordenar')."/MAYO/DESC"; ?>">Descendente</a></li>
                    </ul>
                  </div>
                </div>     
              </th>
              
              <th>
                  <div class="dropdown">
                    <button class="btn btn-success dropdown-toggle btn-xs" type="button" id="dropdownMenu1"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                      <strong>Jun</strong>
                      <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                      <li><a href="<?php echo base_url('usuario/reordenar')."/JUNIO/ASC"; ?>">Ascendente</a></li>
                      <li><a href="<?php echo base_url('usuario/reordenar')."/JUNIO/DESC"; ?>">Descendente</a></li>
                    </ul>
                  </div>
                </div>     
              </th>
              
              <th>
                   <div class="dropdown">
                    <button class="btn btn-success dropdown-toggle btn-xs" type="button" id="dropdownMenu1"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                      <strong>Jul</strong>
                      <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                      <li><a href="<?php echo base_url('usuario/reordenar')."/JULIO/ASC"; ?>">Ascendente</a></li>
                      <li><a href="<?php echo base_url('usuario/reordenar')."/JULIO/DESC"; ?>">Descendente</a></li>
                    </ul>
                  </div>
                </div>                   
              </th>
              
              <th>
                    <div class="dropdown">
                    <button class="btn btn-success dropdown-toggle btn-xs" type="button" id="dropdownMenu1"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                      <strong>Ago</strong>
                      <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                      <li><a href="<?php echo base_url('usuario/reordenar')."/AGOSTO/ASC"; ?>">Ascendente</a></li>
                      <li><a href="<?php echo base_url('usuario/reordenar')."/AGOSTO/DESC"; ?>">Descendente</a></li>
                    </ul>
                  </div>
                </div>                  
              </th>
              
              <th>
                    <div class="dropdown">
                    <button class="btn btn-success dropdown-toggle btn-xs" type="button" id="dropdownMenu1"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                      <strong>Sep</strong>
                      <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                      <li><a href="<?php echo base_url('usuario/reordenar')."/SEPTIEMBRE/ASC"; ?>">Ascendente</a></li>
                      <li><a href="<?php echo base_url('usuario/reordenar')."/SEPTIEMBRE/DESC"; ?>">Descendente</a></li>
                    </ul>
                  </div>
                </div>                  
              </th>
              
              <th>
                    <div class="dropdown">
                    <button class="btn btn-success dropdown-toggle btn-xs" type="button" id="dropdownMenu1"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                      <strong>Oct</strong>
                      <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                      <li><a href="<?php echo base_url('usuario/reordenar')."/OCTUBRE/ASC"; ?>">Ascendente</a></li>
                      <li><a href="<?php echo base_url('usuario/reordenar')."/OCTUBRE/DESC"; ?>">Descendente</a></li>
                    </ul>
                  </div>
                </div>                  
              </th>
              
              <th>
                   <div class="dropdown">
                    <button class="btn btn-success dropdown-toggle btn-xs" type="button" id="dropdownMenu1"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                      <strong>Nov</strong>
                      <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                      <li><a href="<?php echo base_url('usuario/reordenar')."/NOVIEMBRE/ASC"; ?>">Ascendente</a></li>
                      <li><a href="<?php echo base_url('usuario/reordenar')."/NOVIEMBRE/DESC"; ?>">Descendente</a></li>
                    </ul>
                  </div>
                </div>                   
              </th>
              
              <th>
                   <div class="dropdown">
                    <button class="btn btn-success dropdown-toggle btn-xs" type="button" id="dropdownMenu1"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                      <strong>Dic</strong>
                      <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                      <li><a href="<?php echo base_url('usuario/reordenar')."/DICIEMBRE/ASC"; ?>">Ascendente</a></li>
                      <li><a href="<?php echo base_url('usuario/reordenar')."/DICIEMBRE/DESC"; ?>">Descendente</a></li>
                    </ul>
                  </div>
                </div>                   
              </th>
              
              <th><center>Acciones</center></th>
           
                </thead>
              <tbody>
                  <?php 
                  
                  $TotalMonto=0;
                  $TotalEnero=0;
                  $TotalFebrero=0;
                  $TotalMarzo=0;
                  $TotalAbril=0;
                  $TotalMayo=0;
                  $TotalJunio=0;
                  $TotalJulio=0;
                  $TotalAgosto=0;
                  $TotalSeptiembre=0;
                  $TotalOctubre=0;
                  $TotalNoviembre=0;
                  $TotalDiciembre=0;
                  
                  foreach ($listaCombinado as $value) { 
                      $cuarto=$value->CUARTOId;
                      if ($cuarto>0){
                      ?>
                  <tr>
                      <td><?php echo $value->CUARTOId; ?></td>
                      <td><?php echo $value->NOMBRE; ?></td>
                      <td><?php echo $value->APELLIDOPATERNO; ?></td>
                      <td><?php
                            $DiaActual=date("d");
                            if ($DiaActual<$value->DiaCobro){
                                echo "<font color='green'>$value->DiaCobro</font>";
                            } else if($DiaActual==$value->DiaCobro){ 
                                echo "<font color='yellow'>$value->DiaCobro</font>";
                            } else { 
                                echo "<font color='red'>$value->DiaCobro</font>";
                            }
                            
                          ?></td>
                      <td><?php echo $value->CUARTOId; ?></td>                      
                      <td><?php echo $value->MONTO; $TotalMonto+=$value->MONTO; ?></td>
                      <td><?php echo $value->ENERO; $TotalEnero+=$value->ENERO; ?></td>
                      <td><?php echo $value->FEBRERO; $TotalFebrero+=$value->FEBRERO; ?></td>
                      <td><?php echo $value->MARZO; $TotalMarzo+=$value->MARZO; ?></td>
                      <td><?php echo $value->ABRIL; $TotalAbril+=$value->ABRIL; ?></td>
                      <td><?php echo $value->MAYO; $TotalMayo+=$value->MAYO; ?></td>
                      <td><?php echo $value->JUNIO; $TotalJunio+=$value->JUNIO; ?></td>
                      <td><?php echo $value->JULIO; $TotalJulio+=$value->JULIO; ?></td>
                      <td><?php echo $value->AGOSTO; $TotalAgosto+=$value->AGOSTO; ?></td>
                      <td><?php echo $value->SEPTIEMBRE; $TotalSeptiembre+=$value->SEPTIEMBRE; ?></td>
                      <td><?php echo $value->OCTUBRE; $TotalOctubre+=$value->OCTUBRE; ?></td>
                      <td><?php echo $value->NOVIEMBRE; $TotalNoviembre+=$value->NOVIEMBRE; ?></td>
                      <td><?php echo $value->DICIEMBRE; $TotalDiciembre+=$value->DICIEMBRE; ?></td>
                      <td> 
                            <center>
                              <a href="<?php echo base_url('usuario/editpago')."/".$value->CUARTOId; ?>" title="Editar"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                          </center>
                      </td>                     
                  </tr>
                      <?php }}?>
              </tbody>
                <tfoot>
                    <tr>
                      <td>Totales</td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td><?php echo $TotalMonto ?></td>
                      <td><?php echo $TotalEnero ?></td>
                      <td><?php echo $TotalFebrero ?></td>
                      <td><?php echo $TotalMarzo ?></td>
                      <td><?php echo $TotalAbril ?></td>
                      <td><?php echo $TotalMayo ?></td>
                      <td><?php echo $TotalJunio ?></td>
                      <td><?php echo $TotalJulio ?></td>
                      <td><?php echo $TotalAgosto ?></td>
                      <td><?php echo $TotalSeptiembre ?></td>
                      <td><?php echo $TotalOctubre ?></td>
                      <td><?php echo $TotalNoviembre ?></td>
                      <td><?php echo $TotalDiciembre ?></td>
                    </tr>
                </tfoot>
          </table>
      </div>
     <div role="tabpanel" class="tab-pane" id="profile">
        <div class="row">
            <div class="col-md-7">
              <form method="POST" action="<?php 
                echo base_url('usuario/insertgastos')
              ?>">
                <div class="form-group">
                  <label for="exampleInputEmail1">Perfil</label>
                  <select name="txtIdper" class="form-control">
                      <?php foreach ($selPerfil as $value) { ?>
                          <option value="<?php echo $value->N?>"> <?php echo $value->N; ?> </option>    
                      <?php } ?>

                  </select>
                </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Nombres</label>
              <input type="text" name="txtNombres" class="form-control" id="exampleInputEmail1" placeholder="nombres">
            </div>
              <div class="form-group">
              <label for="exampleInputEmail1">Apellidos</label>
              <input type="text" name="txtApellidos" class="form-control" id="exampleInputEmail1" placeholder="Apellidos">
            </div>
              <div class="form-group">
              <label for="exampleInputEmail1">Correo Electrónico</label>
              <input type="text" name="txtCorreo" class="form-control" id="exampleInputEmail1" placeholder="correo">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Telefono</label>
              <input type="text" name="txtTelefono" class="form-control" id="exampleInputPassword1" placeholder="telefono">
            </div>  

            <button type="submit" class="btn btn-default">Registrar Usuario</button>
          </form>
              </div>

          </div>
      </div>
      <div role="tabpanel" class="tab-pane" id="messages">
          <div class="col-md-7">
            <?php
                $this->load->view("usuario/insertgastos");            
            ?>     

      </div>
          

  </div>
        <div role="tabpanel" class="tab-pane" id="settings">
          <div class="col-md-7">
            <?php
                $this->load->view("usuario/ingresos");            
            ?>      
         </div> 
        </div>
</div>
