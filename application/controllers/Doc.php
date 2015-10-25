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

    public function addDoc()
    {
        $name = $this->session->userdata('userName');
        $id = $this->session->userdata('userId');
        $data["name"] = $name;
        $this->load->view("add_view", $data);
    }

    public function submitBill()
    {
        $id = $this->session->userdata("userId");
        $amount = $this->input->post("amount");
        $description = $this->input->post("description");
        $checked = $this->input->post("checkbox");
        $includeBeneficiary = in_array($id, $checked, true);
        $this->load->model("bill_model");
        $billId = $this->bill_model->addBill($amount, $description, $id, count($checked), $includeBeneficiary);
        $this->bill_model->addBillPayer($billId, $checked);
        redirect("bill/showAllBill");
    }


}
