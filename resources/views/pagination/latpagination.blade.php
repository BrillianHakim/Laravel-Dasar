<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Latihan Pagination</h1>
    <table border="1">
        <tr>
            <th>Nama Barang</th>
            <th>harga</th>
        </tr>
        @foreach($latpagination as $p)
        <tr>
            <td>{{ $p->nama }}</td>
            <td>{{ $p->harga}}</td>
        </tr>
        @endforeach
    </table>
    <br>
    Halaman : {{ $latpagination->currentPage() }} <br/>
    Jumlah Data : {{ $latpagination->total() }} <br/>
    Data Per Halaman : {{ $latpagination->perPage() }} <br/>

    {{ $latpagination->links() }}
</body>
</html>