<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subcategories_controller extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Crud_model');   
    }

    public function index()
    {
        $this->load->view('/includes/header_view');
        $data['result'] = $this->Crud_model->sub_categories_show();
        $this->load->view('subcategories_view',$data);
        $this->load->view('includes/footer_view');



    }
    public function create()
    {
        $this->Crud_model->sub_categories_add();
        redirect("Subcategories_controller");
    }
    public function edit($id_subcategoria) 
    {
        $data['row'] = $this->Crud_model->sub_categories_unico_registro($id_subcategoria);
        $this->load->view('subcategories_edit_view', $data);
    }
    public function update($id_subcategoria) {
        $this->Crud_model->sub_categories_update($id_subcategoria);
        redirect("Subcategories_controller");
    }
    public function delete($id_subcategoria) {
        $this->Crud_model->sub_categories_delete($id_subcategoria);
        redirect("Subcategories_controller");
    }
}