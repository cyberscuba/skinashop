<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_sub_category_controller extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Crud_model');
        $this->load->helper('form');
    }

    public function index()
    {
        $this->load->view('/includes/header_view');
        $data['categorias'] = $this->Crud_model->get_category_dropdown();
        $data['subcategorias'] = $this->Crud_model->get_subcategory_dropdown();
        $data['result'] = $this->Crud_model->category_sub_category_show();
        $this->load->view('category_sub_category_view',$data);
        $this->load->view('includes/footer_view');



    }
    public function create()
    {
        $this->Crud_model->category_sub_category_add();
        redirect("Category_sub_category_controller");
    }
    public function edit($id_catsub) 
    {
        $data['row'] = $this->Crud_model->category_sub_category_unico_registro($id_catsub);
        $data['categorias'] = $this->Crud_model->get_category_dropdown();
        $data['subcategorias'] = $this->Crud_model->get_subcategory_dropdown();
        $this->load->view('category_sub_category_edit_view', $data);
    }
    public function update($id_catsub) {
        $this->Crud_model->category_sub_category_update($id_catsub);
        redirect("Category_sub_category_controller");
    }
    public function delete($id_catsub) {
        $this->Crud_model->category_sub_category_delete($id_catsub);
        redirect("Category_sub_category_ontroller");
    }
}