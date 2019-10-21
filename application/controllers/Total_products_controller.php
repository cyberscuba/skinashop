<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Total_products_controller extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Crud_model');
        $this->load->helper('form');
    }

    public function index()
    {
        
        $this->load->view('/includes/header_view');
        $data['productos'] = $this->Crud_model->get_productos_dropdown();
        $data['result'] = $this->Crud_model->total_products_show();
        $this->load->view('total_products_view',$data);
        $this->load->view('includes/footer_view');



    }
    public function create()
    {
        $this->Crud_model->total_products_add();
        redirect("Total_products_controller");
    }
    public function edit($id_product) 
    {
        $data['row'] = $this->Crud_model->total_products_unico_registro($id_product);
        $this->load->view('total_products_edit_view', $data);
    }
    public function update($id_product) {
        $this->Crud_model->total_products_update($id_product);
        redirect("Total_products_controller");
    }
    public function delete($id_product) {
        $this->Crud_model->total_products_delete($id_product);
        redirect("Total_products_controller");
    }
}