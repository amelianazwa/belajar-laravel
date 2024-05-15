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
                <th>nama pembeli</th>
                <th>jenis kelamin</th>
                <th>nama barang</th>
                <th>jumlah</th>
                <th>Tanggal</th>

            </tr>
            @php $no = 1; @endphp
            @foreach ($transaksi as $data)
            
            <tr>
                <th>{{ $no++ }}</th>
                <th>{{ $data->id }}</th>
                <th>{{ $data->pembeli->nama_pembeli }}</th>
                <th>{{ $data->pembeli->jenis_kelamin }}</th>
                <th>{{ $data->barang2->nama_barang }}</th>
                <th>{{ $data->jumlah }}</th>
                <th>{{ $data->tanggal }}</th>
                
                
            </tr>
            @endforeach
        </table>
    </center>
</body>
</html>