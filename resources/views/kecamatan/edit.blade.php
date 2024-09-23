<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Tambah Provinsi</title>
</head>
<body>
	<form action="{{ route('kecamatan.update', $kecamatan) }}" method="POST">
		@csrf
		@method('PUT')
	<div>
		<label for="kode">Kode</label> <br>
		<input type="text" name="kode" value="{{ $kecamatan->kode }}">
	</div>
	<br>
	
	
	<div>
		<label for="kode">Nama Kecamatan</label> <br>
		<input type="text" name="nama_kecamatan" value="{{ $kecamatan->nama_kecamatan }}"> <br> 
		<button type="submit" style="margin-top: 1rem;">Update</button>
	</div>
</form>
</body>
</html>