<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>show</title>
</head>
<body>
    <h2>Detail Barang</h2>
    <p>kode Barang : {{ $barang->kode_barang }}</p>
    <p>Nama Barang : {{ $barang->nama_barang }}</p>
    <p>Kategori : {{ $barang->category->nama_category }}</p>
</body>
</html>