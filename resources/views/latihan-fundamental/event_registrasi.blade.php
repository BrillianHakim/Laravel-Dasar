<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Kontak Event</title>
</head>
<body>
    <h1>Formulir Event</h1>

    <!-- Pesan sukses -->
    @if (session('success'))
        <div style="color: green;">
            <p>{{ session('success') }}</p>
        </div>
    @endif

    <!-- Pesan error -->
    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('event.submit') }}" method="POST">
        @csrf
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" value="{{ old('nama') }}"><br>
        @error('nama')
            <span style="color: red;">{{ $message }}</span><br>
        @enderror

        <label for="email">Email:</label><br>
        <input type="text" id="email" name="email" value="{{ old('email') }}"><br>
        @error('email')
            <span style="color: red;">{{ $message }}</span><br>
        @enderror

        <label for="nomor_handphone">No Hp</label><br>
        <input type="text" id="nomor_handphone" name="nomor_handphone" value="{{ old('nomor_handphone') }}"><br>
        @error('nomor_handphone')
            <span style="color: red;">{{ $message }}</span><br>
        @enderror

        <label for="alamat">Alamat:</label><br>
        <textarea id="alamat" name="alamat">{{ old('alamat') }}</textarea><br>
        @error('alamat')
            <span style="color: red;">{{ $message }}</span><br>
        @enderror

        <button type="submit">Kirim</button>
    </form>
</body>
</html>
