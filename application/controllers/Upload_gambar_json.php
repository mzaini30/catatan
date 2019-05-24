<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload_gambar_json extends CI_Controller {
	public function __construct(){
	    parent::__construct();
	    date_default_timezone_set('Asia/Brunei');
	    if ($this->session->userdata('status') != 'login'){
	    	redirect(base_url() . 'index.php/login');
	    }
	}

	public function index(){
		$this->beranda();
	}	

	public function beranda(){
		$data = $this->db->order_by('judul')->get('upload_gambar')->result();
		echo json_encode($data);
	}

	public function hapus($slug){
		$this->db->delete('upload_gambar', array(
			'slug' => $slug
		));
	}
}
