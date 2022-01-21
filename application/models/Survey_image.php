<?php
Class Survey_image extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->library('crud');
    }
    function gets(){
        $sql = 'select id,survey_site_id,img,description,"c" c from survey_images ';
        $sql.= 'order by create_date desc limit 0,4';
        $ci = & get_instance();
        $que = $ci->db->query($sql);
        return array(
            'res'=>$que->result(),
            'cnt'=>$que->num_rows()
        );
    }
    function updaterow($params){
        return $this->crud->update("survey_images",$params);
    }
}