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
			<form  method="POST" action=<?php echo base_url()."anggota_save"?>>
				<?php foreach($anggota as $value) {?>
				<input type="hidden" name="id" value=<?php echo $value->KdAnggota;?> >
				<div class="form-group">
					<label>Nama</label>
					<input type="text" class="form-control" name="nama" value=<?php echo $value->Nama;?> required>
				</div>
				<div class="form-group">	
					<label>Prodi</label>
					<input type="text" class="form-control" name="prodi" value=<?php echo $value->Prodi;?> required>
				</div>
				<div class="form-group">	
					<label>Jenjang</label>
					<input type="text" class="form-control" name="jenjang" value=<?php echo $value->Jenjang;?> required>
				</div>
				<div class="form-group">	
					<label>Alamat</label>
					<textarea name="alamat" class="form-control" placeholder=<?php echo $value->Alamat;?> required></textarea>
				</div>
				<?php } ?>			
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
</body>
</html>