<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   
    <h1>Pagination</h1>
    <table border="1">
        <tr>
            <th>nama</th>
            <th>jabatan</th>
            <th>umur</th>
            <th>alamat</th>
        </tr>
        @foreach($pagination as $p)
        <tr>
            <td>{{ $p->pegawai_nama }}</td>
            <td>{{ $p->pegawai_jabatan}}</td>
            <td>{{ $p->pegawai_umur }}</td>
            <td>{{ $p->pegawai_alamat}}</td>
        </tr>
        @endforeach
    </table>
    <br>
    Halaman : {{ $pagination->currentPage() }} <br/>
    Jumlah Data : {{ $pagination->total() }} <br/>
    Data Per Halaman : {{ $pagination->perPage() }} <br/>

    {{ $pagination->links() }}

</body>
</html>