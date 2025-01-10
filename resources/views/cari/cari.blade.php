<!-- filepath: /d:/BELAJAR/laravel-dasar/resources/views/cari/cari.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pencarian Nama</title>
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
            justify-content: center;
            margin-bottom: 1rem;
        }
        input[type="text"] {
            padding: 0.5rem;
            font-size: 1rem;
            border: 1px solid #ddd;
            border-radius: 4px;
            width: 300px;
        }
        button {
            padding: 0.5rem 1rem;
            font-size: 1rem;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            margin-left: 0.5rem;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
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
        <h1>Pencarian Nama</h1>
        <form action="{{ route('cari.cari') }}" method="GET">
            <input type="text" name="cari" placeholder="Cari nama..." value="{{ request('cari') }}">
            <button type="submit">Cari</button>
        </form>
        <table>
            <thead>
                <tr>
                    <th>Nama Pegawai</th>
                    <th>Jabatan Pegawai</th>
                    <th>Umur Pegawai</th>
                    <th>Alamat Pegawai</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pagination as $p)
                <tr>
                    <td>{{ $p->pegawai_nama }}</td>
                    <td>{{ $p->pegawai_jabatan }}</td>
                    <td>{{ $p->pegawai_umur }}</td>
                    <td>{{ $p->pegawai_alamat }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="pagination-info">
            Halaman : {{ $pagination->currentPage() }} <br/>
            Jumlah Data : {{ $pagination->total() }} <br/>
            Data Per Halaman : {{ $pagination->perPage() }} <br/>
        </div>
        <div class="pagination-links">
            {{ $pagination->links() }}
        </div>
    </div>
</body>
</html>