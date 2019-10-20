<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products_category_controller extends CI_Controller {

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
        $data['productos'] = $this->Crud_model->get_productos_dropdown();
        $data['result'] = $this->Crud_model->products_category_show();
        $this->load->view('products_category_view',$data);
        $this->load->view('includes/footer_view');



    }
    public function create()
    {
        $this->Crud_model->products_category_add();
        redirect("Products_category_controller");
    }
    public function edit($id_prodcat) 
    {
        $data['row'] = $this->Crud_model->products_category_unico_registro($id_prodcat);
        $data['categorias'] = $this->Crud_model->get_category_dropdown();
        $data['subcategorias'] = $this->Crud_model->get_subcategory_dropdown();
        $data['productos'] = $this->Crud_model->get_productos_dropdown();
        $this->load->view('products_category_edit_view', $data);
    }
    public function update($id_prodcat) {
        $this->Crud_model->products_category_update($id_prodcat);
        redirect("Products_category_controller");
    }
    public function delete($id_prodcat) {
        $this->Crud_model->products_category_delete($id_prodcat);
        redirect("Products_category_controller");
    }
}