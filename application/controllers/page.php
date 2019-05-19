<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class page extends CI_Controller {
  public function __construct(){
    parent::__construct();
    
    $this->load->model('pageModel'); // Load SiswaModel yang ada di folder models
  }
  
  public function index(){
    redirect("page/lists"); // Untuk redirect ke function lists
  }
  
  public function lists(){
    $data['model'] = $this->pageModel->view(); // Panggil fungsi view() yang ada di model siswa
    
    $this->load->view('anggota/anggota', $data);
  }
}