<?php  
	class sirkulasiModel extends CI_Model
	{	
		function display($number,$offset)
		{
			$this->db->select('*');
			$this->db->from('peminjaman');
			$this->db->join('detil_pinjam', 'detil_pinjam.Kdpinjam = peminjaman.Kdpinjam', 'inner');
			$this->db->limit($number,$offset);
			return $query= $this->db->get()->result();		
		}

		function pinjam($peminjaman, $anggota, $buku, $petugas, $tanggal){
			$data = array(
				'Kdpinjam' => $peminjaman,
				'Kdanggota' => $anggota,
				'Kdpetugas' => $petugas
			);
			$data2 = array(
				'Kdpinjam' => $peminjaman,
				'Kdregister' => $buku,
				'Tglkembali' => $tanggal
			);
			$this->db->insert("peminjaman",$data);
			$this->db->insert("detil_pinjam",$data2);
		}

		function hapus($id){
			$this->db->delete('peminjaman',array("Kdpinjam"=>$id));
			$this->db->delete('detil_pinjam',array("Kdpinjam"=>$id));
		}

		function jumlahData(){
			$this->db->select('*');
			$this->db->from('peminjaman');
			$this->db->join('detil_pinjam', 'detil_pinjam.Kdpinjam = peminjaman.Kdpinjam', 'inner');
			return $this->db->get()->num_rows();
		}
	}
?>