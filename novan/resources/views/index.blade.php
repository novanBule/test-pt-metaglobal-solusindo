<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Master Barang</title>
    <style>
        th, td {
            padding: 10px;
        }
    </style>
</head>
<body>
    <h1>Master Barang</h1>

    @if (session('status'))
        <p>{{ session('status') }}</p>
    @endif


    <p><a href="/barang/create">Tambah Barang</a></p>

    <table border="1px">
        <thead>
            <tr>
                <th>kode barang</th>
                <th>nama</th>
                <th>kategori</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($barang as $b)
                <tr>
                    <td>{{ $b->kode_barang }}</td>
                    <td>{{ $b->nama_barang }}</td>
                    <td>{{ $b->category->nama_category }}</td>
                    <td>
                        <form action="/barang/{{ $b->id }}" method="post">
                            @method('delete')
                            @csrf
                            <button type="submit">Hapus</button>
                        </form>

                        <a href="/barang/{{ $b->id }}/edit">Edit</a>

                        <a href="/barang/{{ $b->id }}">Lihat</a>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>