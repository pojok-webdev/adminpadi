<?php
Class Processor extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    function update($params){
        $sql = 'update ' . $params['tableName'] . ' ';
        $sql.= 'set ' . $params['columnName'] . ' = "' . $params['columnValue'] . '" ';
        $sql.= 'where id = ' . $params['id'] . ' ';
        $ci = & get_instance();
        $ci->db->query($sql);
        return array(
            'sql'=>$sql
        );
    }
    function create($params){
        $keys = array();$vals = array();
        foreach($params['keyvals'] as $key=>$val){
            array_push($keys,$key);
            array_push($vals,$val);
        }
        $sql = 'insert into ' . $params['tableName'] . ' ';
        $sql.= '(' . implode(',',$keys) . ') ';
        $sql.= ' values ';
        $sql.= '("' . implode('","',$vals). '") ';
        $ci = & get_instance();
        $ci->db->query($sql);
        return array(
            'sql'=>$sql
        );
    }
}