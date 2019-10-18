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
        $this->load->view('crudView');
    }
    public function create(){
        $this->Crud_model->createData();
        redirect("CrudController");
    }
}