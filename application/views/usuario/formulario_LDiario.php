<table class="table table-hover">
    
<button type="button" id="myButton" data-loading-text="Loading..." class="btn btn-primary" autocomplete="off">
  Nuevo Asiento
</button>
    <button type="button" name="add" id="add" class="btn btn-success">Add More</button>
       <div class="table-responsive">  
         <h3 align="center">Live Table Add Edit Delete using Ajax Jquery in PHP Mysql</h3><br />  
         <div id="live_data"></div>                 
    </div>  
      <thead>

      <th>Id</th>
      <th>FECHA</th>
      
      <th>CODIGOCUENTA</th>
      <th>CUENTA</th>
      <th>DETALLE</th>
      <th>DEBE</th>
      <th>HABER</th>
      <th>SALDO</th>
      </thead>
      <tbody>

      </tbody>
        <tfoot>
            <tr>
              <td>Totales</td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td><?php  ?></td>
              <td><?php  ?></td>
              <td><?php  ?></td>
              
            </tr>
        </tfoot>
  </table>

