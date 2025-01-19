@extends('projek/mastertamu')
@section('judul_halaman','Daftar Tamu')
@section('konten')
    <div class="container">
        <h2>Daftar Tamu</h2>
        <a href="{{ route('bukutamu.tambah') }}" class="btn btn-primary float-left mb-3">Tambah Data</a>
        <form action="/bukutamu/cari" method="GET">
            <input type="text" name="cari" placeholder="Cari Pegawai .."
            value="{{ old('cari') }}">
            <input type="submit" value="CARI">
            </form>
        <table>
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Alamat</th>
                    <th>Nomer Hp</th>
                    <th>Tujuan</th>
                    <th>Waktu Kunjungan</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($buku_tamu as $t)
                <tr>
                    <td>{{ $t->nama }}</td>
                    <td>{{ $t->email }}</td>
                    <td>{{ $t->alamat }}</td>
                    <td>{{ $t->no_hp }}</td>
                    <td>{{ $t->tujuan }}</td>
                    <td>{{ $t->waktu_kunjungan}}</td>
                    <td>
                        <a href="/bukutamu/edit/{{ $t->id}}">Edit</a>|
                        <a href="/bukutamu/hapus/{{ $t->id }}">Hapus</a>    
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="pagination">
            {{ $buku_tamu->links() }}
        </div>



    </div>
@endsection
