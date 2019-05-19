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
					$this->session->set_userdata($sess);
					echo "<script type='text/javascript'>
					window.alert('Login Sukses');
					window.location.href='anggota';
					</script>";
				}
			}
			else{
				echo "<script type='text/javascript'>
				window.alert('Pasword atau Username Salah');
				window.location.href='login';
				</script>";
			}
		}

		public function keamanan(){
			$username = $this->session->userdata('username');
			if($username==""){
				redirect('login');
			}
		}

	}
?>
