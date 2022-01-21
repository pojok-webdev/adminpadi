<?php
Class Processors extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('processor');
    }
    function update(){
        $params = $this->input->post();
        echo json_encode($this->processor->update($params));
    }
    function create(){
        $params = $this->input->post();
        //print_r($this->processor->create($params));
        echo json_encode($this->processor->create($params));
    }
}