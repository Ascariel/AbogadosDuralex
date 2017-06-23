<?php
/**
 *
 */
class Cpersona extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("mPersona");
        $this->load->model("mUsuario");
    }

    public function index()
    {
        $this->load->view('persona/vPersona');
    }

    public function guardar()
    {
        // $param['run']   = $this->input->post("rut");
        // $param['nombre']    = $this->input->post("txtNombre");
        // $param['appaterno'] = $this->input->post("txtPaterno");
        // $param['apmaterno'] = $this->input->post("txtMaterno");
        // $param['email']     = $this->input->post("txtEmail");
        // $param['fechanac']  = $this->input->post("datFecha");

        // $paramUsu['nombreUsuario'] = $this->input->post("txtUsuario");
        // $paramUsu['clave']         = sha1($this->input->post("txtcontra"));

        $campos = array(
            'rut'       => $this->input->post("rut"),
            'nombre'    => $this->input->post("nombre"),
            'apellido' => $this->input->post("apellido"),
            'direccion' => $this->input->post("direccion"),
            'telefonos'     => $this->input->post("telefonos"),
            'tipo_persona' => $this->input->post("tipo_persona"),
            'rol' => $this->input->post("rol"),
            'password' => $this->input->post("password"),
            'fecha_creacion'  => date('Y-m-d', strtotime("2017-01-01") )
            ); 
  

        $this->mPersona->guardar($campos);

        $this->load->view('persona/vPersona');

    }
}
