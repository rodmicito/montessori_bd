<table class="table table-hover">

      <thead>

      <th>N</th>
      <th>FECHA</th>
      <th>DETALLE</th>
      <th>CODIGOCUENTA</th>
      <th>CUENTA</th>
      <th>INGRESO</th>
      <th>EGRESO</th>
      <th>SALDO</th>
      </thead>
      <tbody>
          <?php 

          $TotalMonto=0;
          //$TotalEnero=0;
          $TotalIngreso=0;
          $TotalEgreso=0;

          foreach ($listLibroCuentas as $value) { 
              $Id=$value->Id;
              if ($Id>0){
              ?>
          <tr>
              <td><?php 
                echo $value->Id; 
              ?></td>
              <td><?php 
                echo $value->FECHA; 
              ?></td>
              <td><?php echo $value->DETALLE; ?></td>
              <td><?php echo $value->CODIGOCUENTA; ?></td>
              <td><?php echo $value->CUENTA; ?></td> 
              <td><?php 
                    echo $value->INGRESO; 
                    $TotalIngreso+=$value->INGRESO; 
              ?></td>
              <td><?php 
                echo $value->EGRESO; 
                $TotalEgreso+=$value->EGRESO; 
                ?></td>
              <td><?php 
                $Saldo=$TotalIngreso-$TotalEgreso; 
                echo $Saldo;  
                ?></td>
              
              <?php }}?>
      </tbody>
        <tfoot>
            <tr>
              <td>Totales</td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td><?php echo $TotalIngreso ?></td>
              <td><?php echo $TotalEgreso ?></td>
              <td><?php echo $Saldo ?></td>
              
            </tr>
        </tfoot>
  </table>

