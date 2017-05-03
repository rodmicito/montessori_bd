<?php

class Ingresos extends CI_Controller {

    public function __construct()
    {
            parent::__construct();
            $this->load->helper(array('form', 'url'));
            $this->load->model('Model_Contable');
            $this->load->model('Model_Usuario');
            $this->load->model('Model_estudiantes');
    }

    public function index()
    {
            $this->load->view('upload_form', array('error' => ' ' ));
    }

    public function registrar()
    {
        $Ldiario = $this->Model_estudiantes->listDiarioMontesori();
        $ListaEstudiantes = $this->Model_estudiantes->listEstudiantes();
        $datos = $this->input->post();  
        $cantidadEstudiantes=count($ListaEstudiantes);
        
        if(isset($datos)){
            for($i=0;$i<=$cantidadEstudiantes;$i++){
                $NomId=(int)$datos['txtNombreId'];
                $NumId=(int)$ListaEstudiantes[$i]->N;
                if($NomId==$NumId){
                    $N=$ListaEstudiantes[$i]->N;
                    $lugar=$ListaEstudiantes[$i]->LUGAR;
                    $servicio=$ListaEstudiantes[$i]->SERVICIO;
                    $tipo = $datos['ingresosTipo'];
                    $fecha= date('Y-m-d', strtotime($datos['txtFechaPago']));
                    $Nombre=$ListaEstudiantes[$i]->INSCRITOS;
                    $FechaUsada=date('Y-m-d', strtotime($datos['txtFechaPago']));
                    $date= date_create($FechaUsada);
                    $FechaNumerica=(int)date_format($date,"m");
                    $meses=["ENERO","FEBRERO","MARZO","ABRIL","MAYO","JUNIO","JULIO","AGOSTO","SEPTIEMBRE","OCTUBRE","NOVIEMBRE","DICIEMBRE"];
                    $FechaaPagar=$meses[$FechaNumerica-1];
                    $txtDetalle = "Ingreso mensual ".$FechaaPagar." ".$Nombre." (".$lugar.")";
                    $txtMonto = $datos['txtEfectivo'];
                    $fichero=$tipo.' '.$txtDetalle.' '.$txtMonto.' '.$fecha.'.png';
                    break;
                }
            }
        }
        
        $existe=$this->subir_fichero($fichero);
        if (!$existe) {$fichero='';}
        //$Cuartos=updateCuarto($CUARTOId,$ENERO, $FEBRERO, $MARZO,$ABRIL, $MAYO, $JUNIO, $JULIO, $AGOSTO, $SEPTIEMBRE, $OCTUBRE, $NOVIEMBRE,$DICIEMBRE);
        //$Cuartos=$this->Cuarto($CUARTOId,$txtMonto,$FechaaPagar,$Ldiario);
        $Asiento1=$this->Asiento(1,$tipo,$lugar,$servicio,$fecha,$txtDetalle,$txtMonto, $fichero, $Ldiario);
        $Asiento2=$this->Asiento(2,$tipo,$lugar,$servicio,$fecha,$txtDetalle,$txtMonto, $fichero, $Ldiario);
        $codigodecuenta=$Asiento2[CODIGOCUENTA];
        $cuenta=$Asiento2[CUENTA];
        $LibroCuentas=$this->LibroCuentas($fecha,$txtDetalle,$codigodecuenta,$cuenta,$txtMonto);
        $Estudiantes=$this->Estudiantes($N,$txtMonto,$FechaNumerica);
        
        //$this->Model_Contable->updateCuarto($Asiento1,$Asiento2);
        $this->Model_Contable->updateDiario($Asiento1,$Asiento2);
        $this->Model_Contable->updateLibroCuentas($LibroCuentas);
        $this->Model_Contable->updateEstudiante($Estudiantes);
        redirect('');
    }
    public function CodigoCuenta($tipo,$lugar,$servicio)
    {
        switch ($tipo) {
            case "PENSIONES":
                $txtCodigoCuenta='70.1.';
                $txtCuenta='MENSUALIDADES';
            break;
            case "TEXTOS":
                $txtCodigoCuenta='10.1.0.0';
            break;
            case "UNIFORME":
                $txtCodigoCuenta='10.1.0.0';
            break;
            case "REPOSICION":
                $txtCodigoCuenta='10.1.0.0';
            break;  
            case "VARIOS":
                $txtCodigoCuenta='10.1.0.0';
            break;                
        }
        switch ($lugar) {
            case "CABILDO":
                $txtCodigoCuenta=$txtCodigoCuenta.'1.';
                $txtCuenta=$txtCuenta.' CABILDO';
            break;
            case "PACATA":
                $txtCodigoCuenta=$txtCodigoCuenta.'2.';
                $txtCuenta=$txtCuenta.' PACATA';
            break;        
        }
        switch ($servicio) {
            case "KINDER":
                $txtCodigoCuenta=$txtCodigoCuenta.'1.';
                $txtCuenta=$txtCuenta.' KINDER';
            break;
            case "PREKINDER":
                $txtCodigoCuenta=$txtCodigoCuenta.'2.';
                $txtCuenta=$txtCuenta.' PREKINDER';
            break;   
            case "ESTIMULACION":
                $txtCodigoCuenta=$txtCodigoCuenta.'3.';
                $txtCuenta=$txtCuenta.' ESTIMULACION';
            break;
            case "APOYO":
                $txtCodigoCuenta=$txtCodigoCuenta.'4.';
                $txtCuenta=$txtCuenta.' APOYO';
            break; 
        }
        $array = array(
            'CUENTA' => $txtCuenta,
            'CODIGOCUENTA' => $txtCodigoCuenta,        

        );
        return($array);
    }
    public function LibroCuentas($fecha,$txtDetalle,$codigocuenta,$cuenta,$txtMonto){
        $array = array(
            
            'FECHA' => $fecha, 
            'DETALLE' => $txtDetalle,
            'CODIGOCUENTA' => $codigocuenta,
            'CUENTA' => $cuenta,
            'INGRESO' => $txtMonto,
            //'COMPROBANTE' => $fichero,
        );
        return($array);
    }
    public function Asiento($asiento,$tipo,$lugar,$servicio,$fecha,$txtDetalle,$txtMonto, $fichero, $Ldiario)
    {
        
        $arrayCodigoCuenta=$this->CodigoCuenta($tipo,$lugar,$servicio);
        $txtCodigoCuenta=$arrayCodigoCuenta['CODIGOCUENTA'];
        $cantidad=count($Ldiario);
        $txtTransaccion=$Ldiario[$cantidad-1]->TRANSACCION+1;
        
        $array = array(
            
            'FECHA' => $fecha,
            'CODIGOCUENTA' => $txtCodigoCuenta,        
            'DETALLE' => $txtDetalle,
            'TRANSACCION' => $txtTransaccion,
            'COMPROBANTE' => $fichero,
        );
        
        switch ($asiento) {
            case "1":
                $txtCuenta='CAJA';
                $array["CUENTA"] = $txtCuenta;
                $array["DEBE"] = $txtMonto;
            break;
            case "2":
                //$txtCuenta='CAJA';
                $array["CUENTA"] = $arrayCodigoCuenta['CUENTA'];;
                $array["HABER"] = $txtMonto;
            break;
        }    
        
        return($array);
    }
    public function Asiento2($tipo,$fecha,$txtDetalle,$txtMonto, $fichero, $Ldiario)
    {
        $txtCodigoCuenta='70.0.0.0';
        $txtCuenta='VENTAS';
        $cantidad=count($Ldiario);
        $txtTransaccion=$Ldiario[$cantidad-1]->TRANSACCION+1;
        
        $array = array(
            //'N' => $txtId,
            'FECHA' => $fecha,
            'CODIGOCUENTA' => $txtCodigoCuenta,
            'CUENTA' => $txtCuenta,
            'DETALLE' => $txtDetalle,
            'TRANSACCION' => $txtTransaccion,
            'HABER' => $txtMonto,
            'COMPROBANTE' => $fichero,
        );
        
        return($array);
    }
    public function Cuarto($CUARTOId,$txtMonto,$FechaaPagar,$Ldiario){
       
        $txtCodigoCuenta='10.1.0.0';
        $txtCuenta='CAJA';

        $cantidad=count($Ldiario);
        $txtTransaccion=$Ldiario[$cantidad-1]->TRANSACCION+1;
        
        $array1 = array(
            'CUARTOId' => $CUARTOId,
        );

       switch ($FechaaPagar) {
            case "1":
                //$mes='ENERO' => $ENERO;
                //$array1 = array('CUARTOId' => $CUARTOId,'ENERO'=>$txtMonto);
                $array1['ENERO']=$txtMonto;
                $txtCuenta='CAJA';
            break;
            case "2":
                //$mes='ENERO' => $ENERO;
                $array1["FEBRERO"] = $txtMonto;
                
                $txtCuenta='CAJA';
            break;
            case "3":
                //$mes='ENERO' => $ENERO;
                $array1["MARZO"] = $txtMonto;
                $txtCuenta='CAJA';
            break;
            case "4":
                //$mes='ENERO' => $ENERO;
                $array1["ABRIL"] = $txtMonto;
                $txtCuenta='CAJA';
            break;  
            case "5":
                //$mes='ENERO' => $ENERO;
                $array1["MAYO"] = $txtMonto;
                $txtCuenta='CAJA';
            break;
            case "6":
                //$mes='ENERO' => $ENERO;
                $array1["JUNIO"] = $txtMonto;
                $txtCuenta='CAJA';
            break;
            case "7":
                //$mes='ENERO' => $ENERO;
                $array1["JULIO"] = $txtMonto;
                $txtCuenta='CAJA';
            break;
            case "8":
                //$mes='ENERO' => $ENERO;
                $array1["AGOSTO"] = $txtMonto;
                $txtCuenta='CAJA';
            break; 
            case "9":
                //$mes='ENERO' => $ENERO;
                $array1["SEPTIEMBRE"] = $txtMonto;
                $txtCuenta='CAJA';
            break;
            case "10":
                //$mes='ENERO' => $ENERO;
                $array1["OCTUBRE"] = $txtMonto;
                $txtCuenta='CAJA';
            break;
            case "11":
                //$mes='ENERO' => $ENERO;
                $array1["NOVIEMBRE"] = $txtMonto;
                $txtCuenta='CAJA';
            break;
            case "12":
                //$mes='ENERO' => $ENERO;
                $array1["DICIEMBRE"] = $txtMonto;
                $txtCuenta='CAJA';
            break; 
        }
        
        return($array1);
    }
    public function Estudiantes($N,$txtMonto,$FechaaPagar){

        $array = array(
            'N' => $N,
        );

       switch ($FechaaPagar) {
            case "1":
                $array['ENERO']=$txtMonto;
             break;
            case "2":
                $array["FEBRERO"] = $txtMonto;
            break;
            case "3":
                $array["MARZO"] = $txtMonto;
            break;
            case "4":
                $array["ABRIL"] = $txtMonto;
            break;  
            case "5":
                $array["MAYO"] = $txtMonto;
            break;
            case "6":
                $array["JUNIO"] = $txtMonto;
            break;
            case "7":
                $array["JULIO"] = $txtMonto;
            break;
            case "8":
                $array["AGOSTO"] = $txtMonto;
            break; 
            case "9":
                $array["SEPTIEMBRE"] = $txtMonto;
            break;
            case "10":
                $array["OCTUBRE"] = $txtMonto;
            break;
            case "11":
                $array["NOVIEMBRE"] = $txtMonto;
            break;
            case "12":
                $array["DICIEMBRE"] = $txtMonto;
            break; 
        }
        
        return($array);
    }
    
    public function subir_fichero($fichero)
    {
        $existe=FALSE;
        
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 100;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;
        $config['file_name']           = $fichero;

        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('userfile'))
        {
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('upload_form', $error);
        }
        else                //$this->load->view('upload_succ    }

        {
            $existe=TRUE;
            array('upload_data' => $this->upload->data());

        }
        return($existe);
    }
}