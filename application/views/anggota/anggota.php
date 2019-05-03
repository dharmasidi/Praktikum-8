<!DOCTYPE html>
<html>
<head>
	<title>Data Anggota</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<h1><center>Data Anggota</center></h1>
	<div class="d-flex justify-content-center">		
		<div class="card" style="width: 70rem;">
			<table class="table table-bordered">
				<thead class="thead-dark">
				<tr>
					<th>Kode Anggota</th>
					<th>Nama</th>
					<th>Prodi</th>
					<th>Jenjang</th>
					<th>Alamat</th>
					<th><center>Action</center></th>
				</tr>
				</thead>
				<?php foreach($anggota as $value) {?>
				<tr>
					<td><?php echo $value->KdAnggota;?></td>
					<td><?php echo $value->Nama;?></td>
					<td><?php echo $value->Prodi;?></td>
					<td><?php echo $value->Jenjang;?></td>
					<td><?php echo $value->Alamat;?></td>
					<td>
					<form method="GET" action=<?php echo base_url()."anggota_ubah";?>>
						<input type="hidden" name="id" value=<?php echo $value->KdAnggota;?>>
						<button type="Submit" class="btn btn-warning">Edit</button>
					</form>
					</td>
				</tr>
				<?php } ?>
			</table>
			<button class="btn btn-success" onclick="link('anggota_tambah')">Tambah Data</button>
		</div>
	</div>
	<script type="text/javascript">
		function link(site) {
			window.location ="<?php echo base_url(); ?>"+site;
		}
	</script>
</body>
</html>