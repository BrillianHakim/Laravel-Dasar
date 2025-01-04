<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Edit Data</h1>
    <a href="/pegawaicrud">Kembali</a>
    <br>
    <br>
  
    @foreach($pegawaicrud as $p)
    <form action="/pegawai/update" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
        Nama <input type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}"> <br/>
        Jabatan <input type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}"> <br/>
        Umur <input type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}"> <br/>
        Alamat <textarea required="required" name="alamat">{{ $p->pegawai_alamat }}</textarea> <br/>
        <input type="submit" value="Simpan Data">
    </form>
    @endforeach
</body>
</html>