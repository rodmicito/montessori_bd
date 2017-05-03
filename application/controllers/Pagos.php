<?php

class Pagos extends CI_Controller {

    public function __construct()
    {
            parent::__construct();
            $this->load->helper(array('form', 'url'));
            $this->load->model('Model_Contable');
    }

    public function index()
    {
            $this->load->view('upload_form', array('error' => ' ' ));
    }

    public function registrar()
    {
        $Ldiario = $this->Model_Contable->listDiario();
        //$Ldiario = $this->Model_Usuario->listCuartos();
        $datos = $this->input->post();  
        
        if(isset($datos)){
            $tipo = $datos['txtTipoGasto'];
            $fecha= date("Y-m-d");
            $txtDetalle = $datos['txtDetalle'];
            $txtMonto = $datos['txtMonto'];
            $fichero=$tipo.' '.$txtMonto.' '.$fecha.'.png';
        }
        $existe=$this->subir_fichero($fichero);
        if (!$existe) {$fichero='';}
        $Asiento1=$this->Asiento1($tipo,$fecha,$txtDetalle,$txtMonto, $fichero, $Ldiario);
        $Asiento2=$this->Asiento2($tipo,$fecha,$txtDetalle,$txtMonto, $fichero, $Ldiario);
        $AsientoLibroCuentas=$this->Asiento2($tipo,$fecha,$txtDetalle,$txtMonto, $fichero, $Ldiario);
        $this->Model_Contable->updateDiario($Asiento1,$Asiento2);
        redirect('');
    }
    public function Asiento1($tipo,$fecha,$txtDetalle,$txtMonto, $fichero, $Ldiario)
    {
         switch ($tipo) {
                case "MObra":
                    $txtCodigoCuenta='93.0.0.0';
                    $txtCuenta='COSTOS DE PRODUCCION';
                    break;
                case "ComMate":
                    $txtCodigoCuenta='28.4.0.0';
                    $txtCuenta='MATERIAS PRIMAS';
                    break;
                case "Devolu":
                    $txtCodigoCuenta='70.9.0.0';
                    $txtCuenta='CAJA CHICA';
                    break;
                case "Otro":
                    $txtCodigoCuenta='93.0.0.0';
                    $txtCuenta='GASTOS ADMINISTRATIVOS';
                    break;
        }
        $cantidad=count($Ldiario);
        $txtTransaccion=$Ldiario[$cantidad-1]->TRANSACCION+1;
        
        $array = array(
            //'N' => $txtId,
            'FECHA' => $fecha,
            'CODIGOCUENTA' => $txtCodigoCuenta,
            'CUENTA' => $txtCuenta,
            'DETALLE' => $txtDetalle,
            'TRANSACCION' => $txtTransaccion,
            'DEBE' => $txtMonto,
            'COMPROBANTE' => $fichero,
        );
        return($array);
    }
    public function Asiento2($tipo,$fecha,$txtDetalle,$txtMonto, $fichero, $Ldiario)
    {
        $txtCodigoCuenta='10.1.1.0';
        $txtCuenta='CAJA CHICA';
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