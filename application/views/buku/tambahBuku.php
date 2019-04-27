<!DOCTYPE html>
<html>
<head>
	<title>Buku</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<h1><center>Tambah Data Buku</center></h1>
	<div class="d-flex justify-content-center">
		<div class="card" style="width: 70rem">
			<button class="btn btn-success" onclick="link('buku')">List Data</button>
			<form  method="POST" action=<?php echo base_url()."buku_create";?>>
				<div class="form-group">
					<label>Judul Buku</label>
					<input type="text" class="form-control" name="judul" required>
				</div>
				<div class="form-group">	
					<label>Pengarang</label>
					<input type="text" class="form-control" name="pengarang" required>
				</div>
				<div class="form-group">	
					<label>Penerbit</label>
					<input type="text" class="form-control" name="penerbit" required>
				</div>
				<div class="form-group">	
					<label>Tahun Terbit</label>
					<input type="number" class="form-control" name="tahun" required>
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
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