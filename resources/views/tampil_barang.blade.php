<!DOCTYPE html>
<hqtml lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    
    <table border="1" cellspacing="0" align="center" cellpadding="5">
        <tr>
            <th>Nomor</th>
            <th>Nama Barang</th>
            <th>Merk</th>
            <th>Harga</th>
        </tr>
    @foreach ($barang as $data)
        <tr>
            <td>{{ $data->id }}</td>
            <td>{{$data->nama_barang}}</td>
            <td>{{$data->merk}}</td>
            <td>{{$data->harga}}</td>
        </tr>
        @endforeach
    </table>

   
</body>
</hqtml>