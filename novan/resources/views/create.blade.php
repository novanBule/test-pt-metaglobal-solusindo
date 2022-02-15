<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Create</title>
    </head>
    <body>
        <h2>Tambah Barang</h2>
        <table>
            <form method="post" action="/barang">
                @csrf
                <tr>
                    <td>Kode Barang</td>
                    <td><input type="text" name="kode_barang" /></td>
                </tr>
                <tr>
                    <td>Nama Barang</td>
                    <td><input type="text" name="nama_barang" /></td>
                </tr>
                <tr>
                    <td>Kategori</td>
                    <td>
                        <select name="category_id">
                            @foreach($categories as $c)
                                <option value={{$c->id}}>{{$c->nama_category}}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><button type="submit">Tambah</button></td>
                </tr>
            </form>
        </table>
    </body>
</html>
