<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Edit</title>
    </head>
    <body>
        <h2>Edit Barang</h2>
        <table>
            <form method="post" action="/barang/{{ $barang->id }}">
                @method('put')
                @csrf
                <tr>
                    <td>Kode Barang</td>
                    <td><input type="text" name="kode_barang" value="{{ $barang->kode_barang }}" /></td>
                </tr>
                <tr>
                    <td>Nama Barang</td>
                    <td><input type="text" name="nama_barang" value={{ $barang->nama_barang }} /></td>
                </tr>
                <tr>
                    <td>Kategori</td>
                    <td>
                        <select name="category_id">
                            @foreach($categories as $c)
                                @if ($c->id == $barang->category_id)
                                    <option value={{$c->id}} selected>{{$c->nama_category}}</option>
                                @else
                                    <option value={{$c->id}}>{{$c->nama_category}}</option>
                                @endif
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><button type="submit">Ubah</button></td>
                </tr>
            </form>
        </table>
    </body>
</html>
