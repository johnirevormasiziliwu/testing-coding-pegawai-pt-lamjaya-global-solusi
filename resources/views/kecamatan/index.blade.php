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
			<a href="{{ route('kecamatan.create') }}">Tambah Kecamatan</a>
			<tr>
				<th>No</th>
        <th>Kode</th>
        <th>Kecamatan</th>
        <th>Active</th>
        <th>Action</th>
			</tr>
			@php
					$nomor = 1;
			@endphp
			@foreach ($kecamatans as $kecamatan)
			<tr>
				<td>{{ $nomor++ }}</td>
				<td>{{ $kecamatan->kode }}</td>
				<td>{{ $kecamatan->nama_kecamatan }}</td>
				<td>
					<input type="checkbox" name="" id="">
				</td>
				<td style="display: flex; gap: 10px;">
					<a href="{{ route('kecamatan.edit', $kecamatan) }}">Edit</a>
					<form action="{{ route('kecamatan.destroy', $kecamatan) }}" method="POST">
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
