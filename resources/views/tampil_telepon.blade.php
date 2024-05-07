<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nomor_Telepon</th>
            <th>Pengguna_Id</th>
        </tr>
        @foreach ($telepons as $data)
        <tr>
            <td> {{$data->id}} </td>
            <td> {{$data->nomor_telepon}} </td>
            <td> {{$data->pengguna_id}} </td>

        </tr>
        @endforeach
    </table>
    </center>
</body>
</html>