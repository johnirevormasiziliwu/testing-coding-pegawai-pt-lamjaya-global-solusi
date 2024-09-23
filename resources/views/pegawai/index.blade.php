<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <table border="1" style="width: 100%;">
			<a href="{{ route('pegawai.create') }}">Tambah Pegawai</a>
			<tr>
				<th>No</th>
        <th>Nama Pegawai</th>
        <th>Tempat Lahir</th>
        <th>Tangggal Lahir</th>
        <th>Jenis Kelamin</th>
        <th>Agama</th>
        <th>Alamat</th>
        <th>Provinsi</th>
        <th>Kecamatan</th>
        <th>Kelurahan</th>
        <th>Action</th>
			</tr>
			@php
					$nomor = 1;
			@endphp
			@foreach ($pegawais as $pegawai)
			<tr>
				<td>{{ $nomor++ }}</td>
				<td>{{ $pegawai->name }}</td>
				<td>{{ $pegawai->tempat_lahir }}</td>
				<td>{{ $pegawai->tanggal_lahir }}</td>
				<td>{{ $pegawai->jenis_kelamin }}</td>
				<td>{{ $pegawai->agama }}</td>
				<td>{{ $pegawai->alamat }}</td>
				<td>{{ $pegawai->provinsi->nama_provinsi }}</td>
				<td>{{ $pegawai->kecamatan->nama_kecamatan }}</td>
				<td>{{ $pegawai->kelurahan->nama_kelurahan }}</td>
				<td style="display: flex; gap: 10px;">
					<a href="{{ route('pegawai.edit', $pegawai) }}">Edit</a>
					<form action="{{ route('pegawai.destroy', $pegawai) }}" method="POST">
						@csrf
						@method('DELETE')
						<button type="submit">Delete</button>
					</form>
				</td>
			</tr>
					
			@endforeach
    </table>
</body>

</html>
