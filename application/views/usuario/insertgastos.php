            <?php echo form_open_multipart('pagos/registrar');?>
               <div class="form-group">
                 <label for="exampleInputEmail1">Tipo de Gasto</label>
                  <?php 
                      $options = array(
                                'MObra'       => 'Mano de Obra',
                                'ComMate'       => 'Compra de Materiales',
                                'Devolu'        => 'Devolucion',
                                'Otro'          => 'Otro',
                        );
                   echo form_dropdown('txtTipoGasto',$options, 'class="form-control"');
                  ?>
               </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Detalle</label>
                    <input type="text" name="txtDetalle" class="form-control" id="exampleInputEmail1" placeholder="Detalle del Gasto">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Monto</label>
                    <input type="text" name="txtMonto" class="form-control" id="exampleInputEmail1" placeholder="Bolivianos">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Comprobante</label>
                </div>
                <input type="file" name="userfile" size="20" accept=".gif,.jpg,.jpeg,.png,.doc,.docx"/>
                <input type="submit" value="pagos" />
             </form>
