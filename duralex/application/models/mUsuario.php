<?php

/**
 *
 */
class Musuario extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function guardarUsuario($param)
    {
        $campos = array(
            "nombreUsuario" => $param['nombreUsuario'],
            "clave"         => $param['clave'],
            "idPersona"     => $param['idPersona']);

        $this->db->insert('usuario', $campos);
    }
}
