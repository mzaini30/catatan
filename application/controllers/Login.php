<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function index()
	{
		// $this->load->view('welcome_message');
		// return view('layout.default')
		$this->masuk();
	}

	public function masuk($status = ''){
		return view('login.beranda', array(
			'status' => $status
		));
	}

	public function masuk_do(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$cek = $this->db->get_where('login', array(
			'username' => $username,
			'password' => $password
		))->num_rows();
		if ($cek > 0){
			$this->session->set_userdata(array(
				'status' => 'login'
			));
			redirect(base_url());
		} else {
			$this->session->set_flashdata(array(
				'status' => 'salah'
			));
			redirect(base_url() . 'index.php/login/masuk/salah');
		}
	}
}
