<!DOCTYPE html>
<html>
<head>
    <title>Tambah Produk</title>
</head>
<body>
    <h1>Tambah Produk</h1>

    <form action="{{ route('produk.store') }}" method="POST">
        @csrf

        <p>
            Produk<br>
            <input type="text" name="produk" value="{{ old('produk') }}">
        </p>

        <p>
            Nama Produk<br>
            <input type="text" name="nama_produk" value="{{ old('nama_produk') }}">
        </p>

        <p>
            Ukuran<br>
            <input type="text" name="ukuran" value="{{ old('ukuran') }}">
        </p>

        <p>
            Harga<br>
            <input type="number" name="harga" value="{{ old('harga') }}">
        </p>

        <p>
            Stok<br>
            <input type="number" name="stok" value="{{ old('stok') }}">
        </p>

        <p>
            Deskripsi<br>
            <textarea name="deskripsi">{{ old('deskripsi') }}</textarea>
        </p>

        <button type="submit">Simpan</button>
        <a href="{{ route('produk.index') }}">Kembali</a>
    </form>
</body>
</html>