<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Kecamatan</title>
</head>

<body>
    <form action="{{ route('kelurahan.store') }}" method="POST">
        @csrf
        <div>
            <label for="kode">Kode</label> <br>
            <input type="text" name="kode">
        </div>
        <br>


        <div>
            <label for="kode">Nama keluarahan</label> <br>
            <input type="text" name="nama_kelurahan"> <br>

        </div>
        <br>
        <div>
            <select name="kecamatan_id" >
                @foreach ($kecamatans as $kecamatan)
								<option>Pilih Kecamatan</option>
                    <option value="{{ $kecamatan->id }}" >{{ $kecamatan->nama_kecamatan }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" style="margin-top: 1rem;">Simpan</button>
    </form>
</body>

</html>
