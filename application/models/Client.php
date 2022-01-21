<?php
Class Client extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->config('padiconfig');
    }
    function gets(){
        $sql = 'select a.id,a.name,b.id bid,b.nama,a.alias,b.alias balias, ';
        $sql.= 'case a.clientcategory ';
        $sql.= ' when "2" then "Platinum"';
        $sql.= ' when "3" then "Gold"';
        $sql.= ' when "4" then "Silver"';
        $sql.= ' when "5" then "Bronze"';
        $sql.= ' else "Undefined" end grade, ';
        $sql.= 'c.username hunter,d.username farmer ';
        $sql.= 'from clients a ';
        $sql.= 'left outer join '.$this->config->item('dbcompareto').'.client202112 b on b.id=a.id ';
        $sql.= 'left outer join users c on c.id=a.user_id ';
        $sql.= 'left outer join users d on d.id=a.user_id ';
        $sql.= 'where a.active="1" ';
        $ci = & get_instance();
        $que =  $ci->db->query($sql);
        return array(
            'res'=>$que->result(),
            'cnt'=>$que->num_rows()
        );
    }
    function getams(){
        $sql = 'select a.id,a.user_id,c.username am,b.hunter hunter_id,d.username hunter_name,';
        $sql.= 'case a.clientcategory when "2" then "Platinum" when "3" then "Gold" when "4" then "Silver" when "5" then "Bronze" else "Undefined" end grade ';
        $sql.= 'from clients a ';
        $sql.= 'left outer join '.$this->config->item('dbcompareto').'.client202112 b on b.id=a.id ';
        $sql.= 'left outer join users c on c.id=a.user_id ';
        $sql.= 'left outer join users d on d.id=b.hunter ';
        $sql.= 'where a.active="1" ';
        $ci = & get_instance();
        $que =  $ci->db->query($sql);
        return array(
            'res'=>$que->result(),
            'cnt'=>$que->num_rows()
        );
    }
    function getsla(){
        $sql = 'select a.id,a.user_id,a.name,group_concat(c.sla) asla,d.sla bsla ';
        $sql.= 'from clients a ';
        $sql.= 'left outer join fbs b on b.client_id=a.id ';
        $sql.= 'left outer join fbsslas c on c.nofb=b.nofb ';
        $sql.= 'left outer join '.$this->config->item('dbcompareto').'.client202112 d on d.id=a.id ';
        $sql.= 'where a.active="1" ';
        $sql.= 'group by a.id,a.user_id,a.name,d.sla ';
        $ci = & get_instance();
        $que =  $ci->db->query($sql);
        return array(
            'res'=>$que->result(),
            'cnt'=>$que->num_rows()
        );
    }
    function getorphans(){
        $sql = 'select a.id,a.name,b.id bid,b.nama,a.alias,b.alias balias, ';
        $sql.= 'c.username hunter,d.username farmer,';
        $sql.= 'case a.clientcategory when "2" then "Platinum" when "3" then "Gold" when "4" then "Silver" when "5" then "Bronze" else "Undefined" end grade, ';
        $sql.= 'a.createdate ';
        $sql.= 'from clients a ';
        $sql.= 'left outer join '.$this->config->item('dbcompareto').'.client202112 b on b.id=a.id ';
        $sql.= 'left outer join users c on c.id=a.user_id ';
        $sql.= 'left outer join users d on d.id=a.sale_id ';
        $sql.= 'where a.active="1" and  b.id is null';
        $ci = & get_instance();
        $que =  $ci->db->query($sql);
        return array(
            'res'=>$que->result(),
            'cnt'=>$que->num_rows()
        );
    }
}