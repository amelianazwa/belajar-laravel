<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center> 
    <table border="1">
            <tr>
                <th>No</th>
                <th>ID</th>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Stok</th>
            </tr>
            @php $no = 1; @endphp
            @foreach ($barang2 as $data)
            
            <tr>
                <th>{{ $no++ }}</th>
                <th>{{ $data->id }}</th>
                <th>{{ $data->nama_barang }}</th>
                <th>{{ $data->harga }}</th>
                <th>{{ $data->stok }}</th>
                
            </tr>
            @endforeach
        </table>
    </center>
</body>
</html>