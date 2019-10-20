<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products_controller extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Crud_model');   
    }

    public function index()
    {
        $this->load->view('/includes/header_view');
        $data['result'] = $this->Crud_model->products_show();
        $this->load->view('products_view',$data);
        $this->load->view('includes/footer_view');



    }
    public function create()
    {
        $this->Crud_model->products_add();
        redirect("Products_controller");
    }
    public function edit($id_product) 
    {
        $data['row'] = $this->Crud_model->products_unico_registro($id_product);
        $this->load->view('products_edit_view', $data);
    }
    public function update($id_product) {
        $this->Crud_model->products_update($id_product);
        redirect("Products_controller");
    }
    public function delete($id_product) {
        $this->Crud_model->products_delete($id_product);
        redirect("Products_controller");
    }
}