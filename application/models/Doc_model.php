<?php

/**
 * Created by PhpStorm.
 * User: zhanyang
 * Date: 15/9/7
 * Time: 17:06
 */
class Doc_model extends CI_Model
{
    function getAllDocs($id){
        $querystring = sprintf("select id, name, lasttime from document where userId = %d order by lasttime DESC", $id);
        $result = $this->db->query($querystring);
        return $result->result_array();
    }
}