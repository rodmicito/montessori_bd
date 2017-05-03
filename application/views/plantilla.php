<!Doctype html>
<html lang="es">
    <head>
        <title>Bolivar</title>
        <link href="<?php echo base_url('public/css/bootstrap.css')?>" rel="stylesheet">
        <script src="<?php echo base_url('public/js/jquery.min.js')?>"></script>
        <script src="<?php echo base_url('public/js/bootstrap.js')?>"></script>
        <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->     
        <link href="<?php echo base_url('public/css/bootstrap-datetimepicker.min.css')?>" rel="stylesheet">  
        
        <script src="<?php echo base_url('public/js/moment.min.js')?>"></script>
        <script src="<?php echo base_url('public/js/bootstrap-datetimepicker.min.js')?>"></script>
        <script src="<?php echo base_url('public/js/bootstrap-datetimepicker.es.js')?>"></script>        

        <!-- Bootstrap Date-Picker Plugin 
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>-->
   <!--
   empieza aqui script jquery
   -->
        <!--<script type="text/javascript">-->
   <script>
            $(document).ready(function (){
            //prueba
                  var i=0;  
                  $('#add').click(function(){  
                       i++;
                       const date = new Date();
                       var w0='<tr id="row'+i+'">';
                       var wi='<td>'+i+'</td>';
                       var fecha='<div class="input-group date" id="datetimepick'+i+'"><input type="text" class="form-control" id="txtFechaPago'+i+'" name="txtFechaPago'+i+'"/><span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span></div>';
                       var wi1='<td>'+fecha+'</td>';
                       var w='<td><select class="sexo" name="option[]"><option value="0">- Sexo -</option><option value="M">Masculino</option><option value="F">Femenino</option></select></td>';
                       var w1='<td><input type="text" name="name[]" placeholder="Enter your Name" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td>';
                       var wf='</tr>'
                        $('#dynamic_field').append(w0+wi+wi1+w+w1+wf);
                        
                        $("#dynamic_field").on('','a.#datetimepick1', function() {
                                format: 'DD-MM-YYYY'	
                        })
                        
                  }); 
                  function fetch_data()  
                  {  
                       $.ajax({  
                            url:"<?php 
                echo base_url(); 
            ?>" + "index.php/usuario/user_data_submit",  
                            method:"POST",  
                            success:function(data){  
                                 $('#live_data').html(data);  
                            }  
                       });  
                  }  
                  function tabla(){
                      var q;
                      q='<div class="table-responsive">  <table class="table table-bordered" id="dynamic_field"><tr><th width="5%">Id</th> <th width="40%">FECHA</th>  <th width="10%">CODIGOCUENTA</th><th width="10%">CUENTA</th><th width="10%">DETALLE</th><th width="10%">DEBE</th><th width="10%">HABER</th><th width="10%">SALDO</th></tr>';
                      
                      $('#live_data').html(q);
                  }
                  //fetch_data();
                  tabla();
            //fin de prueba

                
                $('select#nombreApellido').on('change',function(){
                    var valor = $(this).val();
                    //alert(valor);
                    <?php 
                        
                        $nombre=$listaEstudiantes;
                    ?>
                    var nombre =<?php 
                        $json= json_encode($nombre);
                        echo $json
                    ?>;
                    var longitudArray=nombre.length;
                    //var nombreCliente="";
                    for(var i=0;i<longitudArray;i++){
                       if (valor===nombre[i].N){
                            var nombreCliente="Nombre: "+nombre[i].INSCRITOS;
                            //var DiaCobro="Ultimo Mes de Pago: "+nombre[i].ULTIMOMESPAGO;
                            //var ULTIMOMESPAGO="Fecha de Cobro: "+nombre[i].ULTIMOMESPAGO;
                            var MONTO="Monto a Cobrar: "+nombre[i].MONTO;
                            var LUGAR="Cuarto: "+nombre[i].LUGAR;
                            var TURNO="Turno: "+nombre[i].TURNO;
                            //var telefono="Telefono: "+nombre[i].telefono;
                            break;
                            //return ( valor === nombre[i].N );
                        }
                    }
                    //var NombreCompleto=nombre[valor].NOMBRE;
                    //var NombreCompleto=nombreCliente;
                    jQuery("#nombres").text(nombreCliente);
                    //jQuery("#DiaCobro").text(MONTO);
                    //jQuery("#ULTIMOMESPAGO").text(ULTIMOMESPAGO);
                    jQuery("#MONTO").text(MONTO);
                    jQuery("#LUGAR").text(LUGAR);
                    jQuery("#TURNO").text(TURNO);
                    //jQuery("#telefono").text(telefono);
                                        
                });
             $('#myButton').on('click', function () {
               //alert("El texto del botón es --> " + $("#myId").val());
               $('#myModal').modal('show'); 
                //$("#mostrarmodal").modal("show");
              })
              $('#prueba').on('click', function () {
               //alert("El texto del botón es --> " );
               //NOMBRE1=;
               jQuery("label#nombreestudiante").text($("label#nombres").text());
               jQuery("#fechaacobrar").text("Fecha a facturar: "+$("#txtFechaPago").val());
               jQuery("#mensualidad").text("Monto a facturar: "+$("#txtEfectivo").val());
               //$('#myModal').modal('show'); 
                //$("#mostrarmodal").modal("show");
              })
              $('#datetimepicker1').datetimepicker({
                    //viewMode: 'years',
                    format: 'DD-MM-YYYY'
                });
               $('#datetimepick1').datetimepicker({
                    //viewMode: 'years',
                    format: 'DD-MM-YYYY'
                });
               
            });

        </script>
    
    </head>
    
    

    <body>        
        <div id="container">
            <!--Aquí va el contenido de las vistas-->            
            <div class="col-md-10 col-md-offset-1"> 
                
                <nav class="navbar navbar-default">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">BOLIVAR</a>
          </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?php echo base_url(''); ?>">Inicio <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Usuario</a></li>
        
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
                
                <div class="row">
                    <div class="col-md-12">
                        <h1>Montessori Plataforma</h1>
                        <?php
                            $this->load->view($contenido);            
                        ?>                
                    </div>
                </div> 
                <footer>
                    <hr style="border-top: 1px solid #0086b3">
                    <center>
                        &copy; 2016 | Todo los Derechos Reservados | <a href="http://cochatronics.com">Cochatronics.com</a> | <a href="http://cochatronics.com/blog">Blog Cochatronics</a>
                    </center>
                </footer>
            </div>
            
        </div>
        
    </body>    
</html>