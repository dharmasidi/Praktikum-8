<?php  
	class sirkulasiModel extends CI_Model
	{	
		function display()
		{
			$query=$this->db->query("
				SELECT detil_pinjam.*, peminjaman.* FROM peminjaman
				INNER JOIN detil_pinjam ON detil_pinjam.Kdpinjam = peminjaman.Kdpinjam");
			return $query->result();		
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
	}
?>