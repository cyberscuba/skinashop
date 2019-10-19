<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories_controller extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Crud_model');   
    }

    public function index()
    {
        $this->load->view('/includes/header_view');
        $data['result'] = $this->Crud_model->categories_show();
        $this->load->view('categories_view',$data);
        $this->load->view('includes/footer_view');
    }
    public function create()
    {
        $this->Crud_model->categories_add();
        redirect("Categories_controller");
    }
    public function edit($id_categoria) 
    {
        var_dump($id_categoria);
        $data['row'] = $this->Crud_model->categorias_unico_registro($id_categoria);
        $this->load->view('categories_edit_view', $data);
    }
    public function update($id_categoria) {
        $this->Crud_model->categories_update($id_categoria);
        redirect("Categories_controller");
    }
    public function delete($id_categoria) {
        $this->Crud_model->categories_delete($id_categoria);
        redirect("Categories_controller");
    }
}