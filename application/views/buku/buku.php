<!DOCTYPE html>
<html>
<head>
	<title>Data Buku</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<h1><center>Data Buku</center></h1>
	<div class="d-flex justify-content-center">		
		<div class="card" style="width: 70rem;">
			
			<table class="table table-bordered">
				<thead class="thead-dark">
				<tr>
					<th>Kode Buku</th>
					<th>Judul Buku</th>
					<th>Pengarang</th>
					<th>Penerbit</th>
					<th>Tahun Terbit</th>
					<th>Status</th>
					<th>Tgl Pinjam</th>
					<th>Tgl Kembali</th>
					<th><center>Action</center></th>
				</tr>
				</thead>
				<?php foreach($buku as $value) {?>
				<tr>
					<td><?php echo $value->KdRegister;?></td>
					<td><?php echo $value->Judul_Buku;?></td>
					<td><?php echo $value->Pengarang;?></td>
					<td><?php echo $value->Penerbit;?></td>
					<td><?php echo $value->Tahun_Terbit;?></td>
					<?php if($value->Kdpinjam==''){?>
						<td>Belum Terpinjam</td>
					<?php }?>
					<?php if($value->Kdpinjam!=''){?>
						<td>Terpinjam</td>
					<?php }?>
					<td><?php echo $value->Tglpinjam;?></td>
					<td><?php echo $value->Tglkembali;?></td>
					<td>
						<form method="GET" action=<?php echo base_url()."buku_ubah";?>>
							<input type="hidden" name="id" value=<?php echo $value->KdRegister;?>>
							<button type="Submit" class="btn btn-warning">Edit</button>
						</form>
					</td>
				</tr>
				<?php } ?>
			</table>
			<button class="btn btn-success" onclick="link('buku_tambah')">Tambah Data</button>
		</div>
	</div>
	<script type="text/javascript">
		function link(site) {
			window.location ="<?php echo base_url(); ?>"+site;
		}
	</script>
</body>
</html>