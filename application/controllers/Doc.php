<?php
//if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: zhanyang
 * Date: 15/9/7
 * Time: 16:25
 */
class Doc extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library("session");
        $this->load->helper("url");
        $this->load->library("form_validation");
    }

    public function showAllDoc()
    {
        $id = $this->session->userdata('userId');
        $data['id'] = $id;
        $name = $this->session->userdata('userName');
        $data['name'] = $name;
        $this->load->model("doc_model");
        $data["details"] = $this->doc_model->getAllDocs($id);
        $this->load->view("Doc_view", $data);
    }

    public function addDoc($name)
    {
//        $name = $_POST["name"];
//        $name = $this->input->post("name");
        $id = $this->session->userdata('userId');
        $this->load->model("doc_model");
        $docid = $this->doc_model->addDoc($id, $name);
        $data["text"] = "";
        $data["docid"] = $docid;
        $this->load->view("add_view", $data);
    }

    public function editDoc($id){
//        $text =
        $this->load->model("doc_model");
        $text = $this->doc_model->getDocText($id);
        $data["docid"] = $id;
        $data["text"] = $text->doc;
        $this->load->view("add_view", $data);
    }

    public function updateDoc()
    {
        $text = $this->input->post("text");
        $docid = $this->input->post("docid");
        echo $text;
        echo $docid;

        $this->load->model("doc_model");
        $this->doc_model->updateDoc($docid, $text);
//        $this->load->view("update_view", $data);
    }


}
