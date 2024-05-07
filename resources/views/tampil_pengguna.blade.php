<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
        </tr>
        @foreach ($penggunas as $data)
        <tr>
            <td> {{$data->id}} </td>
            <td> {{$data->nama_pengguna}} </td>
        </tr>
        @endforeach
    </table>
</body>
</html>