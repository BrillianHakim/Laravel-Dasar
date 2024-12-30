<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Kontak</title>
</head>
<body>
    <h1>Formulir Kontak</h1>

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

    <form action="{{ route('contact.submit') }}" method="POST">
        @csrf
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" value="{{ old('nama') }}"><br>
        @error('nama')
            <span style="color: red;">{{ $message }}</span><br>
        @enderror

        <label for="pesan">Pesan:</label><br>
        <textarea id="pesan" name="pesan">{{ old('pesan') }}</textarea><br>
        @error('pesan')
            <span style="color: red;">{{ $message }}</span><br>
        @enderror

        <button type="submit">Kirim</button>
    </form>
</body>
</html>
