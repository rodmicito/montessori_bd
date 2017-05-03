<?php

class Model_Usuario extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    //la función de Select * en sql
    public function selPerfil(){
        $MesActual=date("n");
        $MesActual+=7;
        //$consulta="Select * from 2017facturas ORDER BY DiaCobro ASC,".$MesActual." DESC";
        $consulta="SELECT * FROM 2017inquilinas i INNER JOIN 2017facturas f ON (i.CUARTO= f.CUARTO) AND (i.CUARTO!=0) ORDER BY i.CUARTO ASC";
        $query = $this->db->query($consulta);
        //retornamos todo los registros de la tabla perfil
        return $query->result();
    }
    
    public function reordenar($campo,$orden){
        //$query = $this->db->query("SELECT * FROM usuario u inner join perfil p on u.per_id=p.per_id");
        //$MesActual=date("n");
        //$MesActual+=7;
        $consulta="SELECT * FROM 2017cuartos c INNER JOIN 2017inquilinas i ON (i.CUARTO= c.CUARTO) AND (c.CUARTO!=0) ORDER BY i." .$campo.  " ".$orden;// " ASC"; // ORDER BY 2017inquilinas.CUARTO" .$campo . " ". $orden;
        //$consulta="Select * from 2017facturas ORDER BY ".$campo . " ". $orden;
        $query = $this->db->query($consulta);
        return $query->result();
    }
    
    public function servicios($campo,$orden){

        $consulta="Select * from 2017recibosluz ORDER BY ".$campo . " ". $orden;
        $query = $this->db->query($consulta);
        return $query->result();
    }
        public function gastos($campo,$orden){

        $consulta="Select * from cuentas1 ORDER BY ".$campo . " ". $orden;
        $query = $this->db->query($consulta);
        return $query->result();
    }
    
    //funcion para insertar usuario
    public function insertGastos($txtN, $txtDescripcion, $txtMonto, $txtFecha){
        
        $arrayDatos = array(
            //'N' => $txtN,
            'DESCRIPCION' => $txtDescripcion,
            'MONTO' => $txtMonto,
            'FECHA' => $txtFecha,
            
        );
        $this->db->insert('cuentas1', $arrayDatos);
    }
    
    public function insertUsuario($idper, $nombres, $apellidos, $correo, $telefono){
        
        $arrayDatos = array(
            'per_id' => $idper,
            'usu_nombres' => $nombres,
            'usu_apellidos' => $apellidos,
            'usu_correo' => $correo,
            'usu_telefono' => $telefono
        );
        $this->db->insert('usuario', $arrayDatos);
    }
        //funcion listado de cuartos
    public function listCuartos(){

        $consulta="SELECT * FROM 2017cuartos ORDER BY CUARTOId ASC";
        $query = $this->db->query($consulta);
        return $query->result();
    }
    //funcion listado de inquilinas
    public function listInquilinas(){

        $consulta="SELECT * FROM 2017inquilinas ORDER BY CUARTO ASC";
        $query = $this->db->query($consulta);
        return $query->result();
    }
    
        //funcion para listar usuarios
    public function listCombinadoCuartosInquilinas(){
        $consulta="SELECT * FROM 2017cuartos c  LEFT JOIN 2017inquilinas i ON (i.CUARTO= c.CUARTOId) AND (i.CUARTO!=0) ORDER BY c.CUARTOId ASC";
        //$consulta="SELECT * FROM 2017cuartos c  LEFT JOIN 2017inquilinas i ON (i.CUARTO= c.CUARTO) AND (c.CUARTO!=0) ORDER BY i.CUARTO ASC";
        $query = $this->db->query($consulta);
        $u=$query->result();
        return $u;
    }
    
    //funcion para listar usuarios
    public function listUsuario(){
        //$query = $this->db->query("SELECT * FROM usuario u inner join perfil p on u.per_id=p.per_id");
        $MesActual=date("n");
        $MesActual+=7;
        //$consulta="Select * from 2017facturas ORDER BY DiaCobro ASC,".$MesActual." DESC";
        $consulta="SELECT * FROM 2017inquilinas i INNER JOIN 2017facturas f ON (i.CUARTO= f.CUARTO) AND (i.CUARTO!=0) ORDER BY i.CUARTO ASC";
        //$query = $this->db->query($consulta);
        $query = $this->db->query($consulta);
        return $query->result();
    }
    
    public function deleteUsuario($id){        
        $this->db->where('usu_id', $id);
        $this->db->delete('usuario');
    }
    public function editUsuario($id){
        //$consulta = $this->db->query("SELECT * FROM usuario u inner join perfil p on u.per_id = p.per_id WHERE u.usu_id = $id");
        $consulta = $this->db->query("SELECT * FROM 2017facturas u WHERE u.N = $id");
        return $consulta->result();
    }
    public function editPago($id){
        //$consulta = $this->db->query("SELECT * FROM usuario u inner join perfil p on u.per_id = p.per_id WHERE u.usu_id = $id");
        $consulta=$this->db->query("SELECT * FROM 2017cuartos c  LEFT JOIN 2017inquilinas i ON (i.CUARTO= c.CUARTOId) WHERE c.CUARTOId= $id");
        //$consulta = $this->db->query("SELECT * FROM 2017facturas u WHERE u.N = $id");
        return $consulta->result();
    }
    public function editServicios($id){
        //$consulta = $this->db->query("SELECT * FROM usuario u inner join perfil p on u.per_id = p.per_id WHERE u.usu_id = $id");
        $consulta = $this->db->query("SELECT * FROM 2017recibosluz u WHERE u.N = $id");
        return $consulta->result();
    }
    public function editGastos($id){
        //$consulta = $this->db->query("SELECT * FROM usuario u inner join perfil p on u.per_id = p.per_id WHERE u.usu_id = $id");
        $consulta = $this->db->query("SELECT * FROM cuentas1 u WHERE u.N = $id");
        return $consulta->result();
    }
    
    public function updateGastos($txtId,$txtDescripcion, $txtMonto, $txtFecha){
        $array = array(
            'N' => $txtId,
            'DESCRIPCION' => $txtDescripcion,
            'MONTO' => $txtMonto,
            'FECHA' => $txtFecha
        );
        
        $this->db->where('N', $txtId);
        $this->db->update('cuentas1',$array);
    }
    public function updatePago($txtN, $txtCuarto,$txtDeuda , $txtEnero,$txtFebrero,$txtMarzo,$txtAbril,$txtMayo,$txtJunio,$txtJulio,$txtAgosto,$txtSeptiembre,$txtOctubre,$txtNoviembre,$txtDiciembre){

        $array1 = array(
            'N' => $txtN,
            'DEUDA' => $txtDeuda
        );
        
        $this->db->where('N', $txtN);
        $this->db->update('2017inquilinas',$array1);
        
        $array = array(
            'CUARTOId' => $txtCuarto,
            //'NOMBRE' => $txtNombre,
            //'APELLIDOPATERNO' => $txtApellido,
            //'DiaCobro' => $txtDiaCobro,
            //'CUARTO' => $txtCuarto,
            //'MONTO' => $txtMonto,  
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
        
       
        $this->db->where('CUARTOId', $txtCuarto);
        $this->db->update('2017cuartos',$array);
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
    
    public function updateServicios($txtId,$txtTipo, $txtDescripcion, $txtCodigo, $txtEnero,$txtFebrero,$txtMarzo,$txtAbril,$txtMayo,$txtJunio,$txtJulio,$txtAgosto,$txtSeptiembre,$txtOctubre,$txtNoviembre,$txtDiciembre){
        $array = array(
            'N' => $txtId,
            'TIPO' => $txtTipo,
            'DESCRIPCION' => $txtDescripcion,
            'CODIGO' => $txtCodigo,
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
        $this->db->update('2017recibosluz',$array);
    }
    
}