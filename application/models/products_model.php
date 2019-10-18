<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }


    public function prueba()
    {
        $result = $this->db->query('SELECT * FROM productos');
        $row = $result->row();
        print_r($row->id_producto);
        exit;
    }
}
