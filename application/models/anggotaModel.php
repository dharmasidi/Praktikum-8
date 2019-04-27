<?php  
	class anggotaModel extends CI_Model
	{	
		function display()
		{
			$query=$this->db->query("select * from anggota");
			return $query->result();		
		}

		function store($nama,$alamat,$prodi,$jenjang){
			$data = array(
				'Nama' => $nama,
				'Alamat' => $alamat,
				'Prodi' => $prodi,
				'Jenjang' => $jenjang
			);
			$this->db->insert("anggota",$data);	
		}

		function ubah($id){
			$query=$this->db->get_where("anggota",array('KdAnggota'=>$id));
			return $query->result();
		}

		function save($nama,$alamat,$prodi,$jenjang,$id){
			$data = array(
				'Nama' => $nama,
				'Alamat' => $alamat,
				'Prodi' => $prodi,
				'Jenjang' => $jenjang
			);
			$this->db->where('KdAnggota',$id);
			$this->db->update("anggota",$data);
		}
	}
?>