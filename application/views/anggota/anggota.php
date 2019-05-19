<!DOCTYPE html>
<html>
<head>
	<title>Data Anggota</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
</head>
<body>
	<div class="tampildata">
	<h1><center>Tambah Data Anggota</center></h1>
	<div class="d-flex justify-content-center">
		<div class="card" style="width: 70rem">
			<form class="form">
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
				<a id="tambah" class="btn btn-success">Submit</a>
			</form>
		</div>
	</div>
	<h1><center>Data Anggota</center></h1>
	<div class="d-flex justify-content-center">		
		<div class="card" style="width: 70rem;">
			<table>
				<thead class="table table-dark">
				<tr>
					<th>Kode Anggota</th>
					<th>Nama</th>
					<th>Prodi</th>
					<th>Jenjang</th>
					<th>Alamat</th>
					<th><center>Action</center></th>
					<th></th>
				</tr>
				</thead>
				<?php
					foreach($anggota as $value) {
				?>
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
			<br>
			<div class="row">
			<div class="col">
			<!--Tampilkan pagination-->
			<?php echo $this->pagination->create_links();?>
			</div>
			</div>
		</div>
	</div>
	</div>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#tambah").click(function(){
				var data = $('.form').serialize();
				$.ajax({
					type: 'POST',
					url: "http://localhost/Praktikum-8/index.php/anggota_create",
					data: data,
					success: function(){
						alert('sukses');
						$('.tampildata').load("anggota");
					},
					error: function(json){
						alert(json.responseJSON.errors);
					}
				});
			});
		});
		// function link(site) {
			// window.location ="<?php //echo base_url(); ?>"+site;
		// }
	</script>
</body>
</html>