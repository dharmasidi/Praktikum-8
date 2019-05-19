<?php  
	class anggotaModel extends CI_Model
	{	
		function display($number,$offset)
		{
			return $query = $this->db->get("anggota",$number,$offset)->result();		
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

		function jumlahData(){
			return $this->db->get("anggota")->num_rows();
		}
	}
?>