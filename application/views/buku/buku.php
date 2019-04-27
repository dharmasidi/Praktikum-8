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
			<button class="btn btn-success" onclick="link('buku_tambah')">Tambah Data</button>
			<table class="table table-dark">
				<tr>
					<th>Kode Buku</th>
					<th>Judul Buku</th>
					<th>Pengarang</th>
					<th>Penerbit</th>
					<th>Tahun Terbit</th>
					<th><center>Action</center></th>
					<th></th>
				</tr>
				<?php foreach($buku as $value) {?>
				<tr>
					<td><?php echo $value->KdRegister;?></td>
					<td><?php echo $value->Judul_Buku;?></td>
					<td><?php echo $value->Pengarang;?></td>
					<td><?php echo $value->Penerbit;?></td>
					<td><?php echo $value->Tahun_Terbit;?></td>
					<td>
						<form method="GET" action=<?php echo base_url()."buku_ubah";?>>
							<input type="hidden" name="id" value=<?php echo $value->KdRegister;?>>
							<button type="Submit" class="btn btn-warning">Edit</button>
						</form>
					</td>
				</tr>
				<?php } ?>
			</table>
		</div>
	</div>
	<script type="text/javascript">
		function link(site) {
			window.location ="<?php echo base_url(); ?>"+site;
		}
	</script>
</body>
</html>