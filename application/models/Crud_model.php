<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Crud_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        
    }

    function createData()
    {
        $data = array (
            'nombre_categoria' => $this->input->post('nombre_categoria'),
            'es_activa' => $this->input->post('es_activa')
        );
        $this->db->insert('categorias',$data);
    }

    function getAllData()
    {
        $query = $this->db->query('SELECT * FROM categorias');
        return $query->result();
    }
    function getData($id_categoria) {
        $query = $this->db->query('SELECT * FROM categorias WHERE `id_categoria` =' .$id_categoria);
        return $query->row();
    }

    function updateData($id_categoria) {
        $data = array (
            'nombre_categoria' => $this->input->post('nombre_categoria'),
            'es_activa' => $this->input->post('es_activa')
        );
        $this->db->where('id_categoria', $id_categoria);
        $this->db->update('categorias', $data);
    }
    function deleteData($id_categoria) {
        $this->db->where('id_categoria', $id_categoria);
        $this->db->delete('categorias');
    }

}
