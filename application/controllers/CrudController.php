<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CrudController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Crud_model');   
    }

    public function index()
    {
        $data['result'] = $this->Crud_model->getAllData();
        $this->load->view('crudView',$data);
    }
    public function create()
    {
        $this->Crud_model->createData();
        redirect("CrudController");
    }
    public function edit($id_categoria) 
    {
        $data['row'] = $this->Crud_model->getData($id_categoria);
        $this->load->view('crudEdit', $data);
    }
    public function update($id_categoria) {
        $this->Crud_model->updateData($id_categoria);
        redirect("CrudController");
    }
    public function delete($id_categoria) {
        $this->Crud_model->deleteData($id_categoria);
        redirect("CrudController");
    }
}