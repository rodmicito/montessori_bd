<html>
<head>
  
    <script>
    function enviar() {
        console.log('llego');
        //document.formulario.action=destino;
        //document.formulario.submit();
    }

    </script>
<title>Upload Form</title>
</head>
<body>

<?php echo $error;?>

<!--<form method="POST" action="<?php //echo base_url('upload/do_upload')?>">-->
    <?php echo form_open_multipart('upload/do_upload');?>

    <input type="file" name="userfile" size="20" accept=".gif,.jpg,.jpeg,.png,.doc,.docx"/>

<!--    <input type="button" name="enviar1" value="enviar1" id="enviar1" onclick="enviar()" size="20" accept=".gif,.jpg,.jpeg,.png,.doc,.docx"/>-->
    <br /><br />

    <div class="form-group">
              <label for="exampleInputPassword1">NOVIEMBRE</label>
              <input type="text" name="txtNoviembre" class="form-control" id="exampleInputPassword1" >
            </div>  
            <div class="form-group">
              <label for="exampleInputPassword1">DICIEMBRE</label>
              <input type="text" name="txtDiciembre" class="form-control" id="exampleInputPassword1" >
            </div> 
    <input type="submit" value="upload" />

    </form>
    
<!--</form>-->

</body>
</html>



