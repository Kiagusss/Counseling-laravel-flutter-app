<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <table>
        <tr>
            <td>No</td>
            <td>Siswa</td>
            <td>Guru</td>
            <td>Walas</td>
            <td>Layanan</td>
            <td>Judul</td>
            <td>Alasan</td>
            <td>Status</td>
        </tr>
            @foreach ($data as $item)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$item->siswa->nama}}</td>
                <td>{{$item->guru->nama}}</td>
                <td>{{$item->walas->nama}}</td>
                <td>{{$item->layanan->jenis_layanan}}</td>
                <td>{{$item->judul}}</td>
                <td>{{$item->alasan}}</td>
                <td>{{$item->status}}</td>
            </tr>
            @endforeach
    </table>
</body>
</html>