<?php
Class templates extends CI_Controller{
    function __construct(){
        parent::__construct();
    }
    function setactive($field,$status){
        $out = array(
            'tables'=>'active',
            'login'=>'',
            'register'=>'',
            'forgotpassword'=>'',
            'form'=>'',
            'form2'=>'');
        return $out;
    }
    function tables(){
        $data = array(
            'pagetitle'=>'Table Kampret',
            'tabletitle'=>'Test',
            'getactive'=>array(
                'tables'=>'active',
                'login'=>'',
                'register'=>'',
                'forgotpassword'=>'',
                'form'=>'',
                'form2'=>'','form3'=>'')
        );
        $this->load->view('templated/tables',$data);
    }
    function login(){
        $data = array(
            'pagetitle'=>'Login Kampret',
            'tabletitle'=>'Test'
        );
        $this->load->view('templated/login',$data);
    }
    function register(){
        $data = array(
            'pagetitle'=>'Registrasi Kampret',
            'tabletitle'=>'Test'
        );
        $this->load->view('templated/register',$data);
    }
    function forgotpassword(){
        $data = array(
            'pagetitle'=>'Forgot Kampret',
            'tabletitle'=>'Test'
        );
        $this->load->view('templated/forgotpassword',$data);
    }
    function form(){
        $data = array(
            'pagetitle'=>'Forgot Kampret',
            'tabletitle'=>'Test',
            'getactive'=>array(
                'tables'=>'',
                'login'=>'',
                'register'=>'',
                'forgotpassword'=>'',
                'form'=>'active',
                'form2'=>'','form3'=>'')
        );
        $this->load->view('templated/form',$data);
    }
    function form2(){
        $data = array(
            'pagetitle'=>'Form 2 Kampret',
            'tabletitle'=>'Test',
            'getactive'=>array(
                'tables'=>'',
                'login'=>'',
                'register'=>'',
                'forgotpassword'=>'',
                'form'=>'',
                'form2'=>'active',
                'form3'=>'')
        );
        $this->load->view('templated/form2',$data);
    }
    function form3(){
        $data = array(
            'pagetitle'=>'Form 3 Kampret',
            'tabletitle'=>'Test',
            'getactive'=>array(
                'tables'=>'',
                'login'=>'',
                'register'=>'',
                'forgotpassword'=>'',
                'form'=>'',
                'form2'=>'',
                'form3'=>'active')
        );
        $this->load->view('templated/form3',$data);
    }
}