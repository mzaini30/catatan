<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload_gambar extends CI_Controller {
	private $detail = null;

	public function __construct(){
	    parent::__construct();
	    date_default_timezone_set('Asia/Brunei');
	    $this->detail = false;
	    if ($this->session->userdata('status') != 'login'){
	    	redirect(base_url() . 'index.php/login');
	    }
	}

	public function index(){
		$this->beranda();
	}	

	public function beranda(){
		return view('upload_gambar.beranda', array(
			'detail' => $this->detail
		));
	}
}
