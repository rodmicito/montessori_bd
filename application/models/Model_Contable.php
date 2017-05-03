<?php

class Model_Contable extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->dbforge();
    }
    
    public function updateUsuario($txtId,$txtNombre, $txtApellido, $txtDiaCobro,$txtCuarto, $txtMonto, $txtEnero,$txtFebrero,$txtMarzo,$txtAbril,$txtMayo,$txtJunio,$txtJulio,$txtAgosto,$txtSeptiembre,$txtOctubre,$txtNoviembre,$txtDiciembre){
        $array = array(
            'N' => $txtId,
            'NOMBRE' => $txtNombre,
            'APELLIDOPATERNO' => $txtApellido,
            'DiaCobro' => $txtDiaCobro,
            'CUARTO' => $txtCuarto,
            'MONTO' => $txtMonto,  
            'ENERO' => $txtEnero, 
            'FEBRERO' => $txtFebrero,
            'MARZO' => $txtMarzo,  
            'ABRIL' => $txtAbril,
            'MAYO' => $txtMayo,
            'JUNIO' => $txtJunio,  
            'JULIO' => $txtJulio,
            'AGOSTO' => $txtAgosto,  
            'SEPTIEMBRE' => $txtSeptiembre,
            'OCTUBRE' => $txtOctubre,
            'NOVIEMBRE' => $txtNoviembre,  
            'DICIEMBRE' => $txtDiciembre,
        );
        
        $this->db->where('N', $txtId);
        $this->db->update('2017facturas',$array);
    }    
    
    public function updateInquilinas($Cuartos){
       
        $this->db->where('CUARTO', $Cuartos["CUARTO"]);
        $this->db->update('2017inquilinas',$Cuartos);
    }  
    public function updateLibroCuentas($LibroCuentas){
       
        //$this->db->where('N', $LibroCuentas["N"]);
        $this->db->insert('2017librocuentas',$LibroCuentas);
        //$this->db->update('2017librocuentas',$LibroCuentas);
    }     
    
    public function updateEstudiante($Estudiantes){
       
        $this->db->where('N', $Estudiantes["N"]);
        $this->db->update('2017estudiantes',$Estudiantes);
    }  
    
    public function listDiarioMontesori(){
        $consulta="SELECT * FROM librodiariomontesori2017 ORDER BY Id ASC";
        //$consulta="SELECT * FROM 2017cuartos c  LEFT JOIN 2017inquilinas i ON (i.CUARTO= c.CUARTO) AND (c.CUARTO!=0) ORDER BY i.CUARTO ASC";
        $query = $this->db->query($consulta);
        $u=$query->result();
        return $u;
    }
    
    public function updateDiario($Asiento1,$Asiento2){
     
        $this->db->insert('librodiariomontesori2017',$Asiento1);
        $this->db->insert('librodiariomontesori2017',$Asiento2);
    }
}
