<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Register extends CI_Controller {

	public function index()
	{
		$this->load->model('FishModel');
		$data["fish_list"] = $this->FishModel->getFishData();
		$this->load->view('register', $data);
	}
}
