<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('register_view');
	}

	public function store()
	{
        $param = array(
            'f_name'=>$this->input->post('f_name'),
            'l_name'=>$this->input->post('l_name'),
            'email'=>$this->input->post('email'),
        );

        $add = $this->c_model->add($param,'users');

        if ($add) {
            $param_e = array(
            'exam'=>$this->input->post('exam'),
            'user_id'=>$add,
            );

            $add_exam = $this->c_model->add($param_e,'exam_tbl');
            echo json_encode("registered Successfully");
        }
	}

}