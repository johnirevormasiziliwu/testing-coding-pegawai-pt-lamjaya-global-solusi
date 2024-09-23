<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Tambah Provinsi</title>
</head>
<body>
	<form action="{{ route('provinsi.update', $provinsi) }}" method="POST">
		@csrf
		@method('PUT')
	<div>
		<label for="kode">Kode</label> <br>
		<input type="text" name="kode" value="{{ $provinsi->kode }}">
	</div>
	<br>
	
	
	<div>
		<label for="kode">Nama Provinsi</label> <br>
		<input type="text" name="nama_provinsi" value="{{ $provinsi->nama_provinsi }}"> <br> 
		<button type="submit" style="margin-top: 1rem;">Update</button>
	</div>
</form>
</body>
</html>