<!DOCTYPE html>
<html>
<head>
	<title>Data Buku</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
</head>
<body>
	<div class="tampildata">
	<h1><center>Tambah Data Buku</center></h1>
	<div class="d-flex justify-content-center">
		<div class="card" style="width: 70rem">
			<form class="form">
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
				<a id="tambah" class="btn btn-primary">Submit</a>
			</form>
		</div>
	</div>
	<h1><center>Data Buku</center></h1>
	<div class="d-flex justify-content-center">		
		<div class="card" style="width: 70rem;">
			<table>
				<thead class="table table-dark">
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
					<th></th>
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
							<a id="tambah" type="Submit" class="btn btn-warning">Edit</a>
						</form>
					</td>
				</tr>
				<?php } ?>
			</table>
			<br>
			<?php echo $this->pagination->create_links();?>
		</div>
	</div>
	</div>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#tambah").click(function(){
				var data = $('.form').serialize();
				$.ajax({
					type: 'POST',
					url: "http://localhost/Praktikum-8/index.php/buku_create",
					data: data,
					success: function(){
						alert('sukses');
						$('.tampildata').load("buku");
					},
					error: function(json){
						alert(json.responseJSON.errors);
					}
				});
			});
		});
		// function link(site) {
		// 	window.location ="<?php echo base_url(); ?>"+site;
		// }
	</script>
</body>
</html>