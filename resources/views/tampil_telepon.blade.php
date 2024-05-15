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
                <th>Nomor Telepon</th>
                <th>Nama Pengguna</th>
            </tr>
            @php $no = 1; @endphp
            @foreach ($telepon as $data)
            
            <tr>
                <th>{{ $no++ }}</th>
                <th>{{ $data->id }}</th>
                <th>{{ $data->nomor_telepon }}</th>
                <th>{{ $data->pengguna->nama }}</th>
                
            </tr>
            @endforeach
        </table>
    </center>
</body>
</html>