<?php
Class Main extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('client');
    }
    function index(){
        $objs = $this->client->gets();
        $data = array(
            'pagetitle'=>'Perbandingan nama produksi vs impor',
            'tabletitle'=>'Pelanggan',
            'getactive'=>array(
                'name'=>'active',
                'alias'=>'','download'=>'','downloadorphan'=>'','hunter'=>'','sla'=>''),
            'objs'=>$objs['res']
        );
        $this->load->view('main/tables',$data);
    }
    function alias(){
        $objs = $this->client->gets();
        $data = array(
            'pagetitle'=>'Perbandingan alias produksi vs impor',
            'tabletitle'=>'Pelanggan',
            'getactive'=>array(
                'name'=>'',
                'alias'=>'active',
                'download'=>'','downloadorphan'=>'','hunter'=>'','sla'=>''
            ),
            'objs'=>$objs['res']
        );
        $this->load->view('main/alias',$data);
    }
    function hunter(){
        $objs = $this->client->getams();
        $data = array(
            'pagetitle'=>'Perbandingan user_id vs hunter',
            'tabletitle'=>'Pelanggan',
            'getactive'=>array(
                'name'=>'',
                'alias'=>'',
                'download'=>'','downloadorphan'=>'',
                'hunter'=>'active','sla'=>''
            ),
            'objs'=>$objs['res']
        );
        $this->load->view('main/hunter',$data);
    }
    function sla(){
        $objs = $this->client->getsla();
        $data = array(
            'pagetitle'=>'Perbandingan sla db vs sla xls',
            'tabletitle'=>'Pelanggan',
            'getactive'=>array(
                'name'=>'',
                'alias'=>'',
                'hunter'=>'',
                'download'=>'','downloadorphan'=>'',
                'sla'=>'active'
            ),
            'objs'=>$objs['res']
        );
        $this->load->view('main/sla',$data);
    }
    function download(){
        $objs = $this->client->gets();
        $data = array(
            'pagetitle'=>'Download',
            'tabletitle'=>'Pelanggan',
            'getactive'=>array(
                'name'=>'',
                'alias'=>'',
                'download'=>'active','downloadorphan'=>'','hunter'=>'','sla'=>''
            ),
            'objs'=>$objs['res'],
            'subject'=>'Pelanggan',
            'filename'=>'pelanggan'
        );
        $this->load->view('main/download',$data);
    }
    function downloadorphan(){
        $objs = $this->client->getorphans();
        $data = array(
            'pagetitle'=>'Download Orpan',
            'tabletitle'=>'Pelanggan',
            'getactive'=>array(
                'name'=>'',
                'alias'=>'',
                'download'=>'','downloadorphan'=>'active','hunter'=>'','sla'=>''
            ),
            'objs'=>$objs['res'],
            'subject'=>'Pelanggan',
            'filename'=>'pelanggan_tidak_ada_di_excel'
        );
        $this->load->view('main/downloadorphan',$data);
    }
    function info(){
        phpinfo();
    }
}