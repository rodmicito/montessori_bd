<div>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#estudiantesView" aria-controls="home" role="tab" data-toggle="tab">Estudiantes</a></li>
    <li role="presentation"><a href="#LibroCuentas" aria-controls="profile" role="tab" data-toggle="tab">Libro Cuentas</a></li>
    <li role="presentation"><a href="#Ingresos" aria-controls="messages" role="tab" data-toggle="tab">Ingresos</a></li>
    <li role="presentation"><a href="#Egresos" aria-controls="settings" role="tab" data-toggle="tab">Egresos</a></li>
    <li role="presentation"><a href="#LDiario" aria-controls="settings" role="tab" data-toggle="tab">Libro Diario</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="estudiantesView">
        <?php
            $this->load->view("usuario/tabla_estudiantes");            
        ?>  
    </div>
    <div role="tabpanel" class="tab-pane" id="LibroCuentas">
        <?php
            $this->load->view("usuario/tabla_cuentas");            
        ?>  
    </div>
    <div role="tabpanel" class="tab-pane" id="Ingresos">
        <?php
            $this->load->view("usuario/formulario_Ingresos");            
        ?> 
    </div>
      <div role="tabpanel" class="tab-pane" id="Egresos">
        <?php
            $this->load->view("usuario/formulario_Egresos");            
        ?> 
      </div>
      <div role="tabpanel" class="tab-pane" id="LDiario">
        <?php
            $this->load->view("usuario/formulario_LDiario");            
        ?> 
      </div>
  </div>

</div>