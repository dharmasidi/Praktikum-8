<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class bukuController extends CI_Controller {

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
		$this->load->library('pagination');
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('bukuModel');
		$this->load->model('loginModel');
		$this->loginModel->keamanan();
	}

	public function index()
	{
		$jumlahData = $this->bukuModel->jumlahData();

		$config['base_url'] = base_url().'index.php/buku/';
		$config['total_rows'] = $jumlahData;
		$config['per_page'] = 5;

		$from = $this->uri->segment(2);
		$this->pagination->initialize($config);

		$data['buku'] = $this->bukuModel->display($config['per_page'],$from);
		$this->load->view('buku/buku',$data);
	}

	public function store(){
		$judul = $this->input->post('judul');
		$pengarang = $this->input->post('pengarang');
		$penerbit = $this->input->post('penerbit');
		$tahun = $this->input->post('tahun');
		$this->bukuModel->store($judul,$pengarang,$penerbit,$tahun);
		redirect('buku');
	}

	public function edit(){
		$data['buku'] = $this->bukuModel->ubah($this->input->get('id'));
		$this->load->view('buku/ubahBuku',$data);	
	}

	public function save(){
		$id = $this->input->post('id');
		$judul = $this->input->post('judul');
		$pengarang = $this->input->post('pengarang');
		$penerbit = $this->input->post('penerbit');
		$tahun = $this->input->post('tahun');
		$this->bukuModel->save($judul,$pengarang,$penerbit,$tahun,$id);
		redirect('buku');
	}
}
