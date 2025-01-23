<!DOCTYPE html>
<html>
<head>
    <title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
          crossorigin="anonymous">
    <style>
        table tr td,
        table tr th {
            font-size: 9pt;
        }
    </style>
</head>
<body>
    <center>
        <h5>Membuat Laporan PDF Dengan DOMPDF Laravel</h5>
        <h6><a target="_blank" href="https://www.malasngoding.com/membuat-laporan-dengan-dompdf-laravel">www.malasngoding.com</a></h6>
    </center>
    <br/><a href="/pdf/laporan" class="btn btn-primary" target="_blank">CETAK PDF</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Jurusan</th>
                <th>Kelas</th>
            </tr>
        </thead>
        <tbody>
            @php $i=1 @endphp
            @foreach($mahasiswa_itn as $mhs)
            <tr>
                <td>{{ $mhs->nama }}</td>
                <td>{{ $mhs->jurusan }}</td>
                <td>{{ $mhs->kelas }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>