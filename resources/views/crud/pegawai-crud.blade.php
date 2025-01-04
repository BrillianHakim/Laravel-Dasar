<!-- filepath: /d:/BELAJAR/laravel-dasar/resources/views/pegawai/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pegawai</title>
</head>
<body>
    <h1>Data Pegawai</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Nama</th>
                <th>jabatan</th>
                <th>umur</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pegawaicrud as $p)
                <tr>
                    <td>{{ $p->pegawai_nama }}</td>
                    <td>{{ $p->pegawai_jabatan }}</td>
                    <td>{{ $p->pegawai_umur }}</td>
                    <td>{{ $p->pegawai_alamat }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>