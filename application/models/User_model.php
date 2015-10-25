<?php

/**
 * Created by PhpStorm.
 * User: zhanyang
 * Date: 15/9/7
 * Time: 17:06
 */
class User_model extends CI_Model
{
    function checkLogin($email, $password)
    {
        $querystring = "select id, name from user where email='" . $email .
            "' and password='" . $password . "'";
        $result = $this->db->query($querystring);
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return null;
        }
    }


    function addUser($name, $email, $password){
        $querystring = sprintf("Insert into user (name, email, password) VALUES ('%s', '%s', '%s')",
            $name, $email, $password);
        $this->db->query($querystring);
        return $this->db->insert_id();
    }

}