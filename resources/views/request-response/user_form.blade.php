<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input User</title>
</head>
<body>
    <h1>Form Input Data Pengguna</h1>
    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('user.submit') }}" method="POST">
        @csrf
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" value="{{ old('nama') }}"><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}"><br><br>

        <label for="umur">Umur:</label>
        <input type="number" id="umur" name="umur" value="{{ old('umur') }}"><br><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
