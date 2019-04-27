<!DOCTYPE html>
<html>
<head>
	<title>Registrasi</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<h1><center>Update Data User</center></h1>
	<div class="d-flex justify-content-center">
		<div class="card" style="width: 70rem">
			<form  method="POST" action="buku_save">
				<?php foreach($buku as $value) {?>
				<input type="hidden" name="id" value=<?php echo $value->KdRegister;?>>
				<div class="form-group">
					<label>Judul Buku</label>
					<input type="text" class="form-control" name="judul" value=<?php echo $value->Judul_Buku;?> required>
				</div>
				<div class="form-group">	
					<label>Pengarang</label>
					<input type="text" class="form-control" name="pengarang" value=<?php echo $value->Pengarang;?> required>
				</div>
				<div class="form-group">	
					<label>Penerbit</label>
					<input type="text" class="form-control" name="penerbit" value=<?php echo $value->Penerbit;?> required>
				</div>
				<div class="form-group">	
					<label>Tahun Terbit</label>
					<input type="number" class="form-control" name="tahun" value=<?php echo $value->Tahun_Terbit;?> required>
				</div>
				<?php } ?>			
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
</body>
</html>