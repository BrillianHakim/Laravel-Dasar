<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <header style="background-color: #f0f0f0; padding: 10px; text-align: center;">
        <h2>Blog</h2>
        <nav style="font-weight: bold; letter-spacing: 2px;">
            <a style="margin: 5px;" href="/blog">Beranda</a>
            <a style="margin: 5px;" href="/blog/tentang">Tentang</a>
            <a style="margin: 5px;" href="/blog/tentang/kontak">Kontak</a>
        </nav>
    </header>
    <hr>
    <h3>@yield('judul_halaman')</h3>


    @yield('konten')
    <hr>
    <footer style="text-align: center">
		<p>&copy; <a href="https://www.malasngoding.com">www.malasngoding.com</a>. 2018 - 2019</p>
	</footer>
</body>
</html>