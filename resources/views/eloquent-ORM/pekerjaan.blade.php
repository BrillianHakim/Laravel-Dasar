<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan Eloquent_ORM</title>
</head>
<body>
    <h1>Ini Latihan Menampilkan Data dengan Seeders</h1>
    @foreach ($pekerjaan as $p)
        {{ "Nama : ". $p->nama . ' | Pekerjaan : ' . $p->nama_pekerjaan. '| Deskripsi : ' . $p->deskripsi}}<br>
    @endforeach
</body>
</html>