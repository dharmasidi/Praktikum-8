<!DOCTYPE html>
<html>
<head>
	<title>Peminjaman</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<h1><center>Tambah Data Peminjaman</center></h1>
	<div class="d-flex justify-content-center">
		<div class="card" style="width: 70rem">
			<form  method="POST" action=<?php echo base_url()."pinjam";?>>
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
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
	<h1><center>Data Peminjaman</center></h1>
	<div class="d-flex justify-content-center">		
		<div class="card" style="width: 70rem;">
			<table class="table table-bordered">
				<thead class="thead-dark">
				<tr>
					<th>Kode Peminjaman</th>
					<th>Kode Anggota</th>
					<th>Kode Buku</th>
					<th>Kode Petugas</th>
					<th>Tgl Pinjam</th>
					<th>Tgl Kembali</th>
					<th><center>Action</center></th>
				</tr>
				</thead>
				<?php foreach($sirkulasi as $value) {?>
				<tr>
					<td><?php echo $value->Kdpinjam;?></td>
					<td><?php echo $value->Kdanggota;?></td>
					<td><?php echo $value->Kdregister;?></td>
					<td><?php echo $value->Kdpetugas;?></td>
					<td><?php echo $value->Tglpinjam;?></td>
					<td><?php echo $value->Tglkembali;?></td>
					<td>
						<form method="GET" action=<?php echo base_url()."hapus";?>>
							<input type="hidden" name="id" value=<?php echo $value->Kdpinjam;?>>
							<button type="Submit" class="btn btn-danger">Hapus</button>
						</form>
					</td>
				</tr>
				<?php } ?>
			</table>
		</div>
	</div>
</body>
</html>