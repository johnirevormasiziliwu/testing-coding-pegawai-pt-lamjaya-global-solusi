<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Kecamatan</title>
</head>

<body>
    <form action="{{ route('pegawai.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Nama Pegawai</label> <br>
            <input type="text" name="name">
        </div>
        <br>


        <div>
            <label for="tempat_lahir">Tempat Lahir</label> <br>
            <input type="text" name="tempat_lahir"> <br>
        </div>
        <div>
            <label for="tanggal_lahir">Nama Pegawai</label> <br>
            <input type="date" name="tanggal_lahir">
        </div>
        <br>


        <select name="jenis_kelamin" >
            <option>Pilih Jenis Kelamin</option>
            <option value="L">Laki-Laki</option>
            <option value="P">Perempuan</option>
        </select>
        <select name="agama" >
            <option>Pilih Agama</option>
            <option value="islam">Islam</option>
            <option value="kristen">Kristen</option>
        </select>
				<label for="">Alamat</label>
				<input type="text" name="alamat">

				<select name="provinsi_id" >
					<option>Pilih Provinsi</option>
					@foreach ($provinsis as $provinsi)
							<option value="{{ $provinsi->id }}">{{ $provinsi->nama_provinsi }}</option>
					@endforeach
				</select>
				<select name="kecamatan_id" >
					<option>Pilih kecamatan</option>
					@foreach ($kecamatans as $kecamatan)
							<option value="{{ $kecamatan->id }}">{{ $kecamatan->nama_kecamatan }}</option>
					@endforeach
				</select>
				<select name="kelurahan_id" >
					<option>Pilih kelurahan</option>
					@foreach ($kelurahans as $kelurahan)
							<option value="{{ $kelurahan->id }}">{{ $kelurahan->nama_kelurahan }}</option>
					@endforeach
				</select>
        <button type="submit" style="margin-top: 1rem;">Simpan</button>
    </form>
</body>

</html>
