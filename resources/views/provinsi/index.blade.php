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
			<a href="{{ route('provinsi.create') }}">Tambah Provinsi</a>
			<tr>
				<th>No</th>
        <th>Kode</th>
        <th>Provinsi</th>
        <th>Active</th>
        <th>Action</th>
			</tr>
			@php
					$nomor = 1;
			@endphp
			@foreach ($provinsis as $provinsi)
			<tr>
				<td>{{ $nomor++ }}</td>
				<td>{{ $provinsi->kode }}</td>
				<td>{{ $provinsi->nama_provinsi }}</td>
				<td>
					<input type="checkbox" name="" id="">
				</td>
				<td style="display: flex; gap: 10px;">
					<a href="{{ route('provinsi.edit', $provinsi) }}">Edit</a>
					<form action="{{ route('provinsi.destroy', $provinsi) }}" method="POST">
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
