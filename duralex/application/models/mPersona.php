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

        $this->db->insert('usuario', $param);
        return $this->db->insert_id();
    }

}
