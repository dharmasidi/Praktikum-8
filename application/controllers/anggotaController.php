<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class anggotaController extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('anggotaModel');
	}

	public function index()
	{
		$data['anggota'] = $this->anggotaModel->display();
		$this->load->view('anggota/anggota',$data);
	}

	public function create(){
		$this->load->view('anggota/tambahAnggota');	
	}

	public function store(){
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$prodi = $this->input->post('prodi');
		$jenjang = $this->input->post('jenjang');
		$this->anggotaModel->store($nama,$alamat,$prodi,$jenjang);
		$data['anggota'] = $this->anggotaModel->display();
		$this->load->view('anggota/anggota',$data);
	}

	public function edit(){
		$data['anggota'] = $this->anggotaModel->ubah($this->input->get('id'));
		$this->load->view('anggota/ubahAnggota',$data);	
	}

	public function save(){
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$prodi = $this->input->post('prodi');
		$jenjang = $this->input->post('jenjang');
		$this->anggotaModel->save($nama,$alamat,$prodi,$jenjang,$id);
		$data['anggota'] = $this->anggotaModel->display();
		$this->load->view('anggota/anggota',$data);
	}
}
