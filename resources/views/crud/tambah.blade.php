<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Data Pegawai</h1>
    <a href="pegawaicrud"> Kembali</a>
    <br>
    <br>
    <form action="/pegawai/store" method="post">
        {{ csrf_field() }}
        Nama <input type="text" name="nama" required="required"> 
        <br>
        <br>
        Jabatan <input type="text" name="jabatan" required="required">
        <br>
        <br>
        Umur <input type="number" name="umur" required="required">
        <br>
        <br>
        Alamat <textarea name="alamat" required="required"></textarea>
        <br>
        <br>
        <input type="submit" value="Simpan Data">
    </form>
</body>
</html>