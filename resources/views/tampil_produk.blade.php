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
                <th>Nama Produk</th>
                <th>Jumlah</th>
                <th>Tanggal Produksi</th>
                <th>Nama Merek</th>
            </tr>
            @php $no = 1; @endphp
            @foreach ($produk as $data)
            
            <tr>
                <th>{{ $no++ }}</th>
                <th>{{ $data->id }}</th>
                <th>{{ $data->nama_produk }}</th>
                <th>{{ $data->jumlah }}</th>
                <th>{{ $data->tangal_produksi }}</th>
                <th>{{ $data->merek->nama_merek}}</th>
                
            </tr>
            @endforeach
        </table>
    </center>
</body>
</html>