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
        $param['run']       = $this->input->post("txtRun");
        $param['nombre']    = $this->input->post("txtNombre");
        $param['appaterno'] = $this->input->post("txtPaterno");
        $param['apmaterno'] = $this->input->post("txtMaterno");
        $param['email']     = $this->input->post("txtEmail");
        $param['fechanac']  = $this->input->post("datFecha");

        $paramUsu['nombreUsuario'] = $this->input->post("txtUsuario");
        $paramUsu['clave']         = sha1($this->input->post("txtcontra"));

        $lastId = $this->mPersona->guardar($param);

        if ($lastId > 0) {
            $paramUsu['idPersona'] = $lastId;
            $this->mUsuario->guardarUsuario($paramUsu);
        }

    }
}
