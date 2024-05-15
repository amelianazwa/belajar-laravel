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
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>Agama</th>
                    <th>telepon</th>
                    <th>email</th>
                </tr>
                @php $no = 1; @endphp
                @foreach ($siswa as $data)
                
                <tr>
                    <th>{{ $no++ }}</th>
                    <th>{{ $data->id }}</th>
                    <th>{{ $data->nama }}</th>
                    <th>{{ $data->jenis_kelamin }}</th>
                    <th>{{ $data->alamat }}</th>
                    <th>{{ $data->agama }}</th>
                    <th>{{ $data->telepon }}</th>
                    <th>{{ $data->email }}</th>
                </tr>
                @endforeach
            </table>
        </center>
</body>
</html>