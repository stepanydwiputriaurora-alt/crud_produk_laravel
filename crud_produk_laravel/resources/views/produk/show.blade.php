<!DOCTYPE html>
<html>
<head>
    <title>Detail Produk</title>
</head>
<body>
    <h1>Detail Produk</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Produk</th>
            <td>{{ $produk->produk }}</td>
        </tr>
        <tr>
            <th>Nama Produk</th>
            <td>{{ $produk->nama_produk }}</td>
        </tr>
        <tr>
            <th>Ukuran</th>
            <td>{{ $produk->ukuran }}</td>
        </tr>
        <tr>
            <th>Harga</th>
            <td>{{ $produk->harga }}</td>
        </tr>
        <tr>
            <th>Stok</th>
            <td>{{ $produk->stok }}</td>
        </tr>
        <tr>
            <th>Deskripsi</th>
            <td>{{ $produk->deskripsi }}</td>
        </tr>
    </table>

    <p><a href="{{ route('produk.index') }}">Kembali</a></p>
</body>
</html>