<!DOCTYPE html>
<html>
<head>
    <title>Edit Produk</title>
</head>
<body>
    <h1>Edit Produk</h1>

    <form action="{{ route('produk.update', $produk->id) }}" method="POST">
        @csrf
        @method('PUT')

        <p>
            Produk<br>
            <input type="text" name="produk" value="{{ old('produk', $produk->produk) }}">
        </p>

        <p>
            Nama Produk<br>
            <input type="text" name="nama_produk" value="{{ old('nama_produk', $produk->nama_produk) }}">
        </p>

        <p>
            Ukuran<br>
            <input type="text" name="ukuran" value="{{ old('ukuran', $produk->ukuran) }}">
        </p>

        <p>
            Harga<br>
            <input type="number" name="harga" value="{{ old('harga', $produk->harga) }}">
        </p>

        <p>
            Stok<br>
            <input type="number" name="stok" value="{{ old('stok', $produk->stok) }}">
        </p>

        <p>
            Deskripsi<br>
            <textarea name="deskripsi">{{ old('deskripsi', $produk->deskripsi) }}</textarea>
        </p>

        <button type="submit">Update</button>
        <a href="{{ route('produk.index') }}">Kembali</a>
    </form>
</body>
</html>