<?php
Class Crud {
    function update($tableName,$params){
        $arr = array();
        foreach($params as $key=>$val){
            array_push($arr,$key.'="'.$val.'"');
        }
        $sql = 'update ' . $tableName . ' ';
        $sql.= 'set ' . implode(',',$arr) . ' ';
        $sql.= 'where id='.$params['id'].' ';
        $ci = & get_instance();
        $ci->db->query($sql);
        return array('sql'=>$sql);
    }
}