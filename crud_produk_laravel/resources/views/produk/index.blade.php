<!DOCTYPE html>
<html>
<head>
    <title>Data Produk</title>
</head>
<body>
    <h1>Data Produk</h1>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <p><a href="{{ route('produk.create') }}">Tambah Produk</a></p>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Produk</th>
            <th>Nama Produk</th>
            <th>Ukuran</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Deskripsi</th>
            <th>Aksi</th>
        </tr>

        @forelse($produks as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->produk }}</td>
                <td>{{ $item->nama_produk }}</td>
                <td>{{ $item->ukuran }}</td>
                <td>{{ $item->harga }}</td>
                <td>{{ $item->stok }}</td>
                <td>{{ $item->deskripsi }}</td>
                <td>
                    <a href="{{ route('produk.show', $item->id) }}">Detail</a>
                    <a href="{{ route('produk.edit', $item->id) }}">Edit</a>
                    <form action="{{ route('produk.destroy', $item->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Yakin hapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="8">Belum ada data</td>
            </tr>
        @endforelse
    </table>
</body>
</html>