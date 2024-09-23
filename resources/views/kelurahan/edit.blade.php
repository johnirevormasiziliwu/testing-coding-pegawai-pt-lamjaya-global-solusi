<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Tambah Provinsi</title>
</head>
<body>
	<form action="{{ route('kelurahan.update', $kelurahan) }}" method="POST">
		@csrf
		@method('PUT')
	<div>
		<label for="kode">Kode</label> <br>
		<input type="text" name="kode" value="{{ $kelurahan->kode }}">
	</div>
	<br>
	
	
	<div>
		<label for="kode">Nama kelurahan</label> <br>
		<input type="text" name="nama_kelurahan" value="{{ $kelurahan->nama_kelurahan }}"> <br> 
		
	</div>
	<div>
		<select name="kecamatan_id" >
			<option>Pilih Kecamatan</option>
				@foreach ($kecamatans as $kecamatan)
						<option value="{{ $kecamatan->id }}" >{{ $kecamatan->nama_kecamatan }}</option>
				@endforeach
		</select>
</div>
<button type="submit" style="margin-top: 1rem;">Update</button>
</form>
</body>
</html>