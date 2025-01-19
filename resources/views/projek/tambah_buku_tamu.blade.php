<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assets/tambah.css') }}">
</head>
<body>
    <div class="container">
        <h1>Buku Tamu</h1>
        <form action="{{ url('/bukutamu/store') }}" method="POST">
            @csrf
            <label for="nama">Nama</label>
            <input type="text" id="nama" name="nama" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="alamat">Alamat</label>
            <input type="text" id="alamat" name="alamat" required>

            <label for="no_hp">Nomer Hp</label>
            <input type="text" id="no_hp" name="no_hp" required>

            <label for="tujuan">Tujuan</label>
            <input type="text" id="tujuan" name="tujuan" required>

            <label for="waktu_kunjungan">Waktu Kunjungan</label>
            <input type="datetime-local" id="waktu_kunjungan" name="waktu_kunjungan" required>

            <button type="submit">Kirim</button>
        </form>
    </div>
    
</body>
</html>