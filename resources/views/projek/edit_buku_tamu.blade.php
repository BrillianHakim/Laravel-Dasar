<!-- filepath: /d:/BELAJAR/laravel-dasar/resources/views/projek/edit_buku_tamu.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Buku Tamu</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
</head>
<body>
    <div class="container">
        <h1>Edit Buku Tamu</h1>
        @foreach ($buku_tamu as $t)
        <form action="{{ url('/buku-tamu/update', $t->id) }}" method="POST">
            @csrf
            @method('PUT')
            <label for="nama">Nama</label>
            <input type="text" id="nama" name="nama" value="{{ $t->nama }}" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="{{ $t->email }}" required>

            <label for="alamat">Alamat</label>
            <textarea id="alamat" name="alamat" required>{{ $t->alamat }}</textarea>

            <label for="no_hp">Nomer Hp</label>
            <input type="text" id="no_hp" name="no_hp" value="{{ $t->no_hp }}" required>

            <label for="tujuan">Tujuan</label>
            <input type="text" id="tujuan" name="tujuan" value="{{ $t->tujuan }}" required>

            <label for="waktu_kunjungan">Waktu Kunjungan</label>
            <input type="datetime-local" id="waktu_kunjungan" name="waktu_kunjungan" value="{{ $t->waktu_kunjungan }}" required>

            <button type="submit">Simpan</button>
        </form>
        @endforeach
    </div>
</body>
</html>