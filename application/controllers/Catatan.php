<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Catatan extends CI_Controller {
	private $detail = null;

	public function __construct(){
	    parent::__construct();
	    date_default_timezone_set('Asia/Brunei');
	    $this->detail = false;
	    if ($this->session->userdata('status') != 'login'){
	    	redirect(base_url() . 'index.php/login');
	    }
	}
	public function index()
	{
		// $this->load->view('welcome_message');
		// return view('catatan.beranda');
		$this->beranda();
	}

	public function beranda(){
		$config['base_url'] = base_url() . 'index.php/catatan/beranda'; //site url
        $config['total_rows'] = $this->db->count_all('postingan'); //total row
        $config['per_page'] = 10;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
        $this->pagination->initialize($config);

        $halaman = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data = $this->db->order_by('id', 'DESC')->get('postingan', $config["per_page"], $halaman)->result();           
 
        $pagination = $this->pagination->create_links();

		return view('catatan.beranda', array(
			'data' => $data,
			'detail' => $this->detail,
			'pagination' => $pagination
		));
	}

	public function tulis_baru(){
		return view('catatan.baru', array(
			'detail' => $this->detail
		));
	}

	public function catatan_baru_do(){
		$judul = $this->input->post('judul');
		$slug = slug($this->input->post('judul'));
		$isi = $this->input->post('isi');
		$isi_markdown = $this->markdown->parse($this->input->post('isi'));
		$created_at = date("Y-m-d H:i:s");
		$updated_at = date("Y-m-d H:i:s");
		$this->db->insert('postingan', array(
			'judul' => $judul,
			'slug' => $slug,
			'isi' => $isi,
			'isi_markdown' => $isi_markdown,
			'created_at' => $created_at,
			'updated_at' => $updated_at
		));
		redirect(base_url());
	}

	public function detail($slug){
		$data = $this->db->get_where('postingan', array(
			'slug' => $slug
		))->result()[0];
		return view('catatan.detail', array(
			'data' => $data,
			'detail' => true
		));
	}

	public function hapus($slug){
		$this->db->delete('postingan', array(
			'slug' => $slug
		));
		redirect(base_url());
	}

	public function edit($slug){
		$data = $this->db->get_where('postingan', array(
			'slug' => $slug
		))->result()[0];
		return view('catatan.edit', array(
			'data' => $data,
			'detail' => $this->detail
		));
	}

	public function edit_do($slug){
		$judul = $this->input->post('judul');
		$isi = $this->input->post('isi');
		$isi_markdown = $this->markdown->parse($this->input->post('isi'));
		$updated_at = date("Y-m-d H:i:s");
		$this->db->update('postingan', array(
			'judul' => $judul,
			'isi' => $isi,
			'isi_markdown' => $isi_markdown,
			'updated_at' => $updated_at
		), array(
			'slug' => $slug
		));
		redirect(base_url() . 'index.php/catatan/detail/' . $slug);
	}

	public function keluar(){
		$this->session->sess_destroy();
		redirect(base_url() . 'index.php/login');
	}

	public function ganti_username(){
		$data = $this->db->get_where('login', array(
			'id' => '1'
		))->result()[0];
		return view('catatan.ganti_username', array(
			'data' => $data,
			'detail' => $this->detail
		));
	}

	public function ganti_do(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$this->db->update('login', array(
			'username' => $username,
			'password' => $password
		), array(
			'id' => '1'
		));
		redirect(base_url());
	}

	public function cari(){
		$cari = $this->input->get('cari');
		$data = $this->db->like('judul', $cari)->or_like('isi', $cari)->order_by('judul', 'DESC')->get('postingan')->result();
		return view('catatan.cari', array(
			'data' => $data,
			'detail' => $this->detail,
			'cari' => $cari
		));
	}
}
