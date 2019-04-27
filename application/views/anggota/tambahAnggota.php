<!DOCTYPE html>
<html>
<head>
	<title>Registrasi</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<h1><center>Tambah Data Anggota</center></h1>
	<div class="d-flex justify-content-center">
		<div class="card" style="width: 70rem">
			<button class="btn btn-success" onclick="link('anggota')">List Data</button>
			<form  method="POST" action=<?php echo base_url()."anggota_create";?>>
				<div class="form-group">
					<label>Nama</label>
					<input type="text" class="form-control" name="nama" required>
				</div>
				<div class="form-group">	
					<label>Prodi</label>
					<input type="text" class="form-control" name="prodi" required>
				</div>
				<div class="form-group">	
					<label>Jenjang</label>
					<input type="text" class="form-control" name="jenjang" required>
				</div>
				<div class="form-group">	
					<label>Alamat</label>
					<textarea name="alamat" class="form-control" required></textarea>
				</div>
				<button type="Submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
	<script type="text/javascript">
		function link(site) {
			window.location ="<?php echo base_url(); ?>"+site;
		}
	</script>
</body>
</html>