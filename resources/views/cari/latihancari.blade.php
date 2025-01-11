<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Cari Buku</h1>
    <form action="{{ route('buku.cari') }}" method="GET">
        <input type="text" name="cari" placeholder="Cari nama..." value="{{ request('cari') }}">
        <button type="submit">Cari</button>
    </form>
    <table border="1">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Tahun</th>
                <th>Genre</th>
            </tr>
        </thead>
        <tbody>
            @foreach($buku as $b)
            <tr>
                <td>{{ $b->judul }}</td>
                <td>{{ $b->penulis }}</td>
                <td>{{ $b->tahun_terbit }}</td>
                <td>{{ $b->genre }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
        Halaman : {{ $buku->currentPage() }} <br/>
        Jumlah Data : {{ $buku->total() }} <br/>
        Data Per Halaman : {{ $buku->perPage() }} <br/>
        {{ $buku->links() }}
</body>
</html>