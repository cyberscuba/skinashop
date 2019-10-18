<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Crud_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        
    }

    function create()
    {
        $data = array (
            'nombre_categoria' => $this->input->post('nombre_categoria'),
            'es_activa' => $this->input->post('es_activa')
        );
        $this->db->insert('categorias',$data);
    }
    

}
