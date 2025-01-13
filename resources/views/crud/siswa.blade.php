<!-- filepath: /d:/BELAJAR/laravel-dasar/resources/views/crud/siswa.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Siswa</title>
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
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 1rem;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .pagination-info {
            margin-bottom: 1rem;
            text-align: center;
        }
        .pagination-links {
            display: flex;
            justify-content: center;
        }
        .pagination-links nav {
            display: inline-block;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Data Siswa</h1>
        <form action="/siswa/cari" method="GET">
            <input type="text" name="cari" placeholder="Cari siswa .."
            value="{{ old('cari') }}">
            <input type="submit" value="CARI">
        </form>
        <a  href="/siswa/tambah"> + Tambah Pegawai Baru</a>

    <br>

    <br>
        <table>
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>Tanggal Lahir</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($siswa as $s)
                <tr>
                    <td>{{ $s->nama }}</td>
                    <td>{{ $s->Kelas }}</td>
                    <td>{{ $s->jenis_kelamin }}</td>
                    <td>{{ $s->alamat }}</td>
                    <td>{{ $s->tanggal_lahir }}</td>
                    <td>
                        <a href="/siswa/edit/{{ $s->id}}">Edit</a>|
                        <a href="/siswa/hapus/{{ $s->id }}">Hapus</a>    
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="pagination-info">
            Halaman : {{ $siswa->currentPage() }} <br/>
            Jumlah Data : {{ $siswa->total() }} <br/>
            Data Per Halaman : {{ $siswa->perPage() }} <br/>
        </div>
        <div class="pagination-links">
            {{ $siswa->links() }}
        </div>
    </div>
</body>
</html>