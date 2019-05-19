<!DOCTYPE html>
<html>
<head>
	<title>Peminjaman</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
</head>
<body>
	<div class="tampildata">
	<h1><center>Tambah Data Peminjaman</center></h1>
	<div class="d-flex justify-content-center">
		<div class="card" style="width: 70rem">
			<form class="form">
				<div class="form-group">
					<label>Kode Peminjaman</label>
					<input type="number" class="form-control" name="peminjaman" required>
				</div>
				<div class="form-group">
					<label>Kode Anggota</label>
					<input type="number" class="form-control" name="anggota" required>
				</div>
				<div class="form-group">	
					<label>Kode Buku</label>
					<input type="number" class="form-control" name="buku" required>
				</div>
				<div class="form-group">	
					<label>Kode Petugas</label>
					<input type="number" class="form-control" name="petugas" required>
				</div>
				<div class="form-group">
					<label>Tanggal Kembali</label>
					<input type="date" class="form-control" name="tanggal" required>
				</div>		
				<a id="tambah" type="submit" class="btn btn-primary">Submit</a>
			</form>
		</div>
	</div>
	<h1><center>Data Peminjaman</center></h1>
	<div class="d-flex justify-content-center">		
		<div class="card" style="width: 70rem;">
			<table class="table table-dark">
				<tr>
					<th>Kode Peminjaman</th>
					<th>Kode Anggota</th>
					<th>Kode Buku</th>
					<th>Kode Petugas</th>
					<th>Tgl Pinjam</th>
					<th>Tgl Kembali</th>
					<th><center>Action</center></th>
					<th></th>
				</tr>
				<?php foreach($sirkulasi as $value) {?>
				<tr>
					<td><?php echo $value->Kdpinjam;?></td>
					<td><?php echo $value->Kdanggota;?></td>
					<td><?php echo $value->Kdregister;?></td>
					<td><?php echo $value->Kdpetugas;?></td>
					<td><?php echo $value->Tglpinjam;?></td>
					<td><?php echo $value->Tglkembali;?></td>
					<td>
						<a style="background-color: red" class="hapus" id=<?php echo $value->Kdpinjam;?>>Hapus</a>
					</td>
				</tr>
				<?php } ?>
			</table>
		</div>
	</div>
	<br>
		<?php echo $this->pagination->create_links();?>
	</div>
	<script type="text/javascript">
		$(document).ready(function(id){
			$("#tambah").click(function(){
				var data = $('.form').serialize();
				$.ajax({
					type: 'POST',
					url: "http://localhost/Praktikum-8/index.php/pinjam",
					data: data,
					success: function(){
						alert('sukses');
						$('.tampildata').load("sirkulasi");
					},
					error: function(json){
						alert(json.responseJSON.errors);
					}
				});
			});
			$(".hapus").click(function(){
				var id = $(this).attr('id');
				alert(id);
				$.ajax({
					type: 'POST',
					url: "http://localhost/Praktikum-8/index.php/hapus",
					data: 'id='+id,
					success: function(){
						alert('sukses');
						$('.tampildata').load("sirkulasi");
					},
					error: function(json){
						alert(json.responseJSON.errors);
					}
				});
			});
		});
	</script>
</body>
</html>