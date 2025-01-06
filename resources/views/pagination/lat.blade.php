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
            <th>Nama mahasiswa</th>
            <th>email</th>
            <th>jurusan</th>
        </tr>
        @foreach($lat as $p)
        <tr>
            <td>{{ $p->nama }}</td>
            <td>{{ $p->email }}</td>
            <td>{{ $p->jurusan}}</td>
        </tr>
        @endforeach
    </table>
    <br>
    Halaman : {{ $lat->currentPage() }} <br/>
    Jumlah Data : {{ $lat->total() }} <br/>
    Data Per Halaman : {{ $lat->perPage() }} <br/>

    {{ $lat->links() }}
</body>
</html>