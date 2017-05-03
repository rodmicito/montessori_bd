<?php
class Usuario extends CI_Controller {
    function __construct() {
        parent::__construct();
        //comunicación con el modelo
        $this->load->model('Model_estudiantes');
    }    
    
    public function user_data_submit() {
        $data = array(
            'username' => "rodcito",
            'pwd'=>'pwd'
        );

            //Either you can print value or you can send value to database
            echo json_encode($data);
    }
    
    public function index(){
        $data['contenido'] = "usuario/estudiantes";        //enviar a plantilla la vista index de usuario
        $data['listaEstudiantes'] = $this->Model_estudiantes->listEstudiantes();
        $data['listEstudiantesCabildo'] = $this->Model_estudiantes->listEstudiantesCabildo();
        $data['listEstudiantesPacata'] = $this->Model_estudiantes->listEstudiantesPacata();
        $data['listLibroCuentas'] = $this->Model_estudiantes->listLibroCuentas();
        //$data['listaInquilinas'] = $this->Model_Usuario->listInquilinas();
        //$data['listaCuartos'] = $this->Model_Usuario->listCuartos();
        $this->load->view("plantilla", $data);
    }
    
    public function reordenar($campo ,$orden){
        $data['contenido'] = "usuario/index";        //enviar a plantilla la vista index de usuario
        $data['listaCombinado'] = $this->Model_Usuario->reordenar($campo,$orden);
        //$data['listaUsuario'] = $this->Model_Usuario->reordenar($campo,$orden);
        $this->load->view("plantilla", $data);
    }
    
    public function servicios($campo= NULL,$orden= NULL){
        $data['contenido'] = "usuario/servicios";        //enviar a plantilla la vista index de usuario
        if ($campo== NULL || $orden== NULL)
        {
            $campo=1;
            $orden="ASC";
        }
        $data['listaUsuario'] = $this->Model_Usuario->servicios($campo,$orden);
        $this->load->view("plantilla", $data);
    }
    
    
    public function gastos($campo= NULL,$orden= NULL){
        //; 
        //;
        $data['contenido'] = "usuario/gastos";        //enviar a plantilla la vista index de usuario
        //$data['selPerfil'] = $this->Model_Usuario->reordenar($campo,$orden);
        if ($campo== NULL || $orden== NULL)
        {
            $campo=1;
            $orden="DESC";
        }
        $data['listaUsuario'] = $this->Model_Usuario->gastos($campo,$orden);
        $this->load->view("plantilla", $data);
    }
    
    public function insertgastos(){
        $datos = $this->input->post();        
        if(isset($datos)){
            $txtN = $datos['txtIdper'];
            $txtDescripcion = $datos['txtDescripcion'];
            $txtMonto = $datos['txtMonto'];
            $txtFecha = $datos['txtFecha'];

            $this->Model_Usuario->insertGastos($txtN, $txtDescripcion, $txtMonto, $txtFecha);
            redirect('');
        }        
    }   
    
    public function insert(){
        $datos = $this->input->post();        
        if(isset($datos)){
            $txtId = $datos['txtIdper'];
            $txtNombres = $datos['txtNombres'];
            $txtApellidos = $datos['txtApellidos'];
            $txtCorreo = $datos['txtCorreo'];
            $txtTelefono = $datos['txtTelefono'];
            $this->Model_Usuario->insertUsuario($txtId, $txtNombres, $txtApellidos, $txtCorreo, $txtTelefono);
            redirect('');
        }        
    }    
    
    public function delete($id = NULL){
        if($id != NULL){
            $this->Model_Usuario->deleteUsuario($id);
            redirect('');
        }
    }
       
    public function editgastos($id = NULL){
        if($id != NULL){
            //mostrar datos
            $data['contenido'] = 'usuario/editgastos';
            $data['listaUsuario'] = $this->Model_Usuario->gastos(1,"ASC");
            $data['datosUsuario'] = $this->Model_Usuario->editGastos($id);
            $this->load->view('plantilla', $data);
        }else{
            //regresar a index enviar parametro
            redirect('');
        }  
    }
    
       public function editpago($id = NULL){
        if($id != NULL){
            //mostrar datos
            $data['contenido'] = 'usuario/editpago';
            //$data['listaUsuario'] = $this->Model_Usuario->gastos(1,"ASC");
            $data['listaCombinado'] = $this->Model_Usuario->editPago($id);
            $this->load->view('plantilla', $data);
        }else{
            //regresar a index enviar parametro
            redirect('');
        }  
    }
    
    
    public function updategastos(){
        $datos = $this->input->post();        
        if(isset($datos)){
            $txtId = $datos['txtId'];
            $txtDescripcion = $datos['txtDescripcion'];
            $txtMonto = $datos['txtMonto'];
            $txtFecha = $datos['txtFecha'];
            
            
            $this->Model_Usuario->updateGastos($txtId,$txtDescripcion, $txtMonto, $txtFecha);
            redirect('');
        }
    }
    
    public function do_upload()
    {
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 100;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('userfile'))
        {
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('upload_form', $error);
        }
        else
        {
                $data = array('upload_data' => $this->upload->data());
                $this->load->view('upload_success', $data);
        }
    }

     public function updateUsuario(){
        $datos = $this->input->post();        
        if(isset($datos)){
            $txtCuarto = $datos['txtCuarto'];
            $txtNombre = $datos['txtNombre'];
            $txtApellido = $datos['txtApellido'];
            $txtDiaCobro = $datos['txtDiaCobro'];
            $txtDeuda = $datos['txtDeuda'];
            $txtMonto = $datos['txtMonto'];
            $txtEnero = $datos['txtEnero'];
            $txtFebrero = $datos['txtFebrero'];
            $txtMarzo = $datos['txtMarzo'];
            $txtAbril = $datos['txtAbril'];
            $txtMayo = $datos['txtMayo'];
            $txtJunio = $datos['txtJunio'];
            $txtJulio = $datos['txtJulio'];
            $txtAgosto = $datos['txtAgosto'];
            $txtSeptiembre = $datos['txtSeptiembre'];
            $txtOctubre = $datos['txtOctubre'];
            $txtNoviembre = $datos['txtNoviembre'];
            $txtDiciembre = $datos['txtDiciembre'];
            
            $this->Model_Usuario->updateUsuario($txtCuarto,$txtNombre, $txtApellido, $txtDiaCobro,$txtDeuda, $txtMonto, $txtEnero,$txtFebrero,$txtMarzo,$txtAbril,$txtMayo,$txtJunio,$txtJulio,$txtAgosto,$txtSeptiembre,$txtOctubre,$txtNoviembre,$txtDiciembre);
            redirect('');
        }
    }
    public function updatepago(){
        $datos = $this->input->post();  
      
        if(isset($datos)){
            $nombre = $datos[0];
            $fecha= date("Y-m-d");
            $txtN = $datos['txtN'];
            $txtCuarto = $datos['txtCuarto'];
            //$txtNombre = $datos['txtNombre'];
            //$txtApellido = $datos['txtApellido'];
            //$txtDiaCobro = $datos['txtDiaCobro'];
            $txtDeuda = $datos['txtDeuda'];
            $txtEnero = $datos['txtEnero'];
            $txtFebrero = $datos['txtFebrero'];
            $txtMarzo = $datos['txtMarzo'];
            $txtAbril = $datos['txtAbril'];
            $txtMayo = $datos['txtMayo'];
            $txtJunio = $datos['txtJunio'];
            $txtJulio = $datos['txtJulio'];
            $txtAgosto = $datos['txtAgosto'];
            $txtSeptiembre = $datos['txtSeptiembre'];
            $txtOctubre = $datos['txtOctubre'];
            $txtNoviembre = $datos['txtNoviembre'];
            $txtDiciembre = $datos['txtDiciembre'];
            //
            $fileNombre= $txtCuarto.$nombre . $fecha .'.png';
            $config['upload_path']          = './uploads/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 100;
            $config['max_width']            = 1024;
            $config['max_height']           = 768;
            $config['file_name']           = $fileNombre;
            
            $this->load->library('upload', $config);
            if ( ! $this->upload->do_upload('userfile'))
            {
                    $error = array('error' => $this->upload->display_errors());
                    $this->load->view('upload_form', $error);
            }
            else
            {
                    $data = array('upload_data' => $this->upload->data());
                    $this->load->view('upload_success', $data);
            }
            //
            $this->Model_Usuario->updatePago($txtN,$txtCuarto, $txtDeuda , $txtEnero,$txtFebrero,$txtMarzo,$txtAbril,$txtMayo,$txtJunio,$txtJulio,$txtAgosto,$txtSeptiembre,$txtOctubre,$txtNoviembre,$txtDiciembre);
            redirect('');
        }
    }
}