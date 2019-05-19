<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class sirkulasiController extends CI_Controller {

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
		$this->load->model('sirkulasiModel');
		$this->load->model('loginModel');
		$this->loginModel->keamanan();
	}

	public function index()
	{
		$jumlahData = $this->sirkulasiModel->jumlahData();

		$config['base_url'] = base_url().'index.php/sirkulasi/';
		$config['total_rows'] = $jumlahData;
		$config['per_page'] = 5;

		$from = $this->uri->segment(2);
		$this->pagination->initialize($config);

		$data['sirkulasi'] = $this->sirkulasiModel->display($config['per_page'],$from);
		$this->load->view('sirkulasi/pinjam',$data);
	}

	public function pinjam(){
		$peminjaman = $this->input->post('peminjaman'); 
		$anggota = $this->input->post('anggota');
		$buku = $this->input->post('buku');
		$petugas = $this->input->post('petugas');
		$tanggal = $this->input->post('tanggal');
		$this->sirkulasiModel->pinjam($peminjaman,$anggota,$buku,$petugas,$tanggal);
		redirect('sirkulasi');
	}

	public function hapus(){
		$id = $this->input->post('id');
		$this->sirkulasiModel->hapus($id);
		redirect('sirkulasi');
	}
}
