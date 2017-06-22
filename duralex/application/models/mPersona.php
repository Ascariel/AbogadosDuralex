<?php
/**
 *
 */
class Mpersona extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function guardar($param)
    {
        $campos = array(
            'run'       => $param['run'],
            'nombre'    => $param['nombre'],
            'appaterno' => $param['appaterno'],
            'apmaterno' => $param['apmaterno'],
            'email'     => $param['email'],
            'fechanac'  => date('Y-m-d', strtotime(str_replace('/', '-', $param['fechanac']))));

        $this->db->insert('persona', $campos);
        return $this->db->insert_id();
    }

}
