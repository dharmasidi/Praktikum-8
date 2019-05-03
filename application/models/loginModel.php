<?php  
	class loginModel extends CI_Model
	{	
		public function ambilLogin($username,$password){
			$this->db->where('username',$username);
			$this->db->where('password',$password);
			$query = $this->db->get('petugas');
			if($query->num_rows()>0){
				foreach($query->result() as $row){
					$sess = array(
						'username' => $row->username,
						'password' => $row->password
					);
					$this->session->get_userdata($sess);
					redirect('anggota');
				}
			}
			else{
				redirect('login');
			}
		}

		public function keamanan(){
			$username = $this->session->sess_destroy('username');
			if(!empty($username)){
				$this->session->sess_destroy();
				redirect('login');
			}
		}

	}
?>