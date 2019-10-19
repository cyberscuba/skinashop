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
        $data['result'] = $this->Crud_model->categories_show();
        $this->load->view('subcategories_view',$data);
    }
    public function create()
    {
        $this->Crud_model->createData();
        redirect("Subcategories_controller");
    }
    public function edit($id_subcategoria) 
    {
        $data['row'] = $this->Crud_model->getData($id_subcategoria);
        $this->load->view('subcategories_edit_view', $data);
    }
    public function update($id_subcategoria) {
        $this->Crud_model->updateData($id_subcategoria);
        redirect("Subcategories_controller");
    }
    public function delete($id_subcategoria) {
        $this->Crud_model->deleteData($id_subcategoria);
        redirect("Subcategories_controller");
    }
}