<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Produk</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produk as $p)
                <tr>
                    <td>{{ $p->id }}</td>
                    <td>{{ $p->nama}}</td>
                    <td>{{ $p->harga }}</td>
                    <td>{{ $p->stok }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>