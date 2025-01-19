<!-- filepath: /d:/BELAJAR/laravel-dasar/resources/views/crud/editsiswa.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data Siswa</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/tambah.css') }}">
</head>
<body>
    <div class="container">
        <h1>Edit Data Siswa</h1>
        @foreach($buku_tamu as $p)
        <form action="{{ url('/bukutamu/update') }}" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{ $p->id }}"> <br/>

            <label for="nama">Nama</label>
            <input type="text" id="nama" name="nama" value="{{ $p->nama }}" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="{{ $p->email }}" required>


            <label for="alamat">Alamat</label>
            <textarea id="alamat" name="alamat" required>{{ $p->alamat }}</textarea>

            <label for="no_hp">Nomer Hp</label>
            <input type="text" id="no_hp" name="no_hp" value="{{ $p->no_hp }}" required>

            <label for="tujuan">Tujuan</label>
            <input type="text" id="tujuan" name="tujuan" value="{{ $p->tujuan }}" required>

            <label for="waktu_kunjungan">Waktu Kunjungan</label>
            <input type="datetime-local" id="waktu_kunjungan" name="waktu_kunjungan" value="{{ $p->waktu_kunjungan }}" required>
            
            <button type="submit">Simpan</button>
        </form>
        @endforeach
    </div>
</body>
</html>