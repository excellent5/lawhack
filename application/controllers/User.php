<?php

/**
 * Created by PhpStorm.
 * User: zhanyang
 * Date: 15/9/7
 * Time: 19:47
 */
class User extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library("session");
        $this->load->helper("url");
//        $this->load->library("form_validation");
        $this->load->model("user_model");
    }

    public function login()
    {
        if ($this->session->userdata('userId')!== null){
            redirect("bill/showAllBill");
        }
        else {
            if ($this->input->get("auth") !== null) {
                $data["auth"] = $this->input->get("auth");
            } else {
                $data["auth"] = 1;
            }
            $this->load->view("Login_view", $data);
        }
    }

    public function signup(){
        $this->load->view("Signup_view");
    }

    public function addUser(){
        $name = $this->input->post("name");
        $email = $this->input->post("email");
        $password = $this->input->post("password");
        $id = $this->user_model->addUser($name, $email, $password);
        $this->session->set_userdata('userId', $id);
        $this->session->set_userdata('userName', $name);
        redirect("doc/showAllDoc");
    }

    public function logout(){
        $this->session->unset_userdata('userId');
        session_destroy();
        redirect("user/login");
    }

    public function validateInfo()
    {
        $email = $this->input->post("email");
        $password = $this->input->post("password");
//        $this->load->model("user_model");
        $row = $this->user_model->checkLogin($email, $password);
        if ($row != null) {
            $this->session->set_userdata('userId', $row->id);
            $this->session->set_userdata('userName', $row->name);
            redirect("doc/showAllDoc");
        } else {
            redirect("user/login?auth=-1");
        }
    }

    public function updateInformation()
    {

    }
}