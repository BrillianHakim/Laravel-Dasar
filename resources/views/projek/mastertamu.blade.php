<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Buku Tamu</title>
  <link rel="stylesheet" href="{{ asset('assets/BukuTamu.css') }}">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
</head>
<body>
  <div class="sidebar">
    <a href="#">Dashboard</a>
    <a href="/bukutamu">Buku Tamu</a>
  </div>

  <div class="content">
    @yield('konten')
  </div>
</body>
</html>
