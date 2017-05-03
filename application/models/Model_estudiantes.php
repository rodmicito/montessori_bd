<?php

class Model_Estudiantes extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->dbforge();
    }
    
    public function listDiarioMontesori(){

        $consulta="SELECT * FROM librodiariomontesori2017 ORDER BY Id ASC";
        $query = $this->db->query($consulta);
        return $query->result();
    }
    
    public function listEstudiantes(){

        $consulta="SELECT * FROM 2017estudiantes ORDER BY N ASC";
        $query = $this->db->query($consulta);
        return $query->result();
    }
    
    public function listEstudiantesCabildo(){

        $consulta="SELECT * FROM 2017estudiantes i WHERE i.LUGAR = 'CABILDO'";
        $query = $this->db->query($consulta);
        return $query->result();
    }
    public function listLibroCuentas(){

        $consulta="SELECT * FROM 2017librocuentas ORDER BY Id ASC";
        $query = $this->db->query($consulta);
        return $query->result();
    }
    
    public function listEstudiantesPacata(){

        $consulta="SELECT * FROM 2017estudiantes i WHERE i.LUGAR = 'PACATA'";
        $query = $this->db->query($consulta);
        return $query->result();
    }
}

