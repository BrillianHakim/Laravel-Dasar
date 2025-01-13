<!-- filepath: /d:/BELAJAR/laravel-dasar/resources/views/crud/editsiswa.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data Siswa</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            color: #333;
        }
        .container {
            width: 80%;
            margin-top: 2rem;
            background: #fff;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h1 {
            font-size: 2rem;
            margin-bottom: 1rem;
            text-align: center;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        input, select, textarea, button {
            margin: 0.5rem 0;
            padding: 0.75rem;
            font-size: 1rem;
        }
        button {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Edit Data Siswa</h1>
        @foreach($siswa as $p)
        <form action="/siswa/update" method="post">
            @csrf
            <input type="hidden" name="id" value="{{ $p->id }}"> <br/>
            <label for="nama">Nama</label>
            <input type="text" id="nama" name="nama" value="{{ $p->nama }}" required>

            <label for="kelas">Kelas</label>
            <select id="kelas" name="kelas" required>
                <option value="10" {{ $p->kelas == '10' ? 'selected' : '' }}>10</option>
                <option value="11" {{ $p->kelas == '11' ? 'selected' : '' }}>11</option>
                <option value="12" {{ $p->kelas == '12' ? 'selected' : '' }}>12</option>
            </select>

            <label for="jenis_kelamin">Jenis Kelamin</label>
            <select id="jenis_kelamin" name="jenis_kelamin" required>
                <option value="Laki-laki" {{ $p->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                <option value="Perempuan" {{ $p->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
            </select>

            <label for="alamat">Alamat</label>
            <textarea id="alamat" name="alamat" required>{{ $p->alamat }}</textarea>

            <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="date" id="tanggal_lahir" name="tanggal_lahir" value="{{ $p->tanggal_lahir }}" required>

            <button type="submit">Simpan</button>
        </form>
        @endforeach
    </div>
</body>
</html>