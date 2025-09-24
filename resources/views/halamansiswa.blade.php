<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Data Siswa</h1>
    <table>
        <tr>
            <th>Id</th>
            <th>Nama Lengkap</th>
            <th>Jenis Kelamin</th>
            <th>Tanggal Lahir</th>
            <th>Kelas</th>
        </tr>
        @foreach($siswa as $data)
        <tr>
            <td>{{$data->id}}</td>
            <td>{{$data->nama_lengkap}}</td>
            <td>{{$data->jenis_kelamin}}</td>
            <td>{{$data->tanggal_lahir}}</td>
            <td>{{$data->kelas}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>