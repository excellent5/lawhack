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
        return $result->result();
    }

    function addDoc($userid, $name){
        $querystring = sprintf("Insert into document (userId, name) VALUES (%d, '%s')", $userid, $name);
        $result = $this->db->query($querystring);
        return $this->db->insert_id();
    }

    function getDocText($id){
        $querystring = sprintf("select doc from document where id = %d", $id);
        $result = $this->db->query($querystring);
        return $result->row();
    }

    function updateDoc($docid, $text){
        $querystring = sprintf("Update document set text='%s' where id=%d", $text, $docid);
        $result = $this->db->query($querystring);
    }
}