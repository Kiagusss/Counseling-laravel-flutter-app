<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if($errors->any())
                <div class="mt-2 alert alert-danger">
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
    <form action="{{route('layanan.store')}}" method="POST">
        @csrf
            <label for="siswa">From :</label>
            <input type="text" disabled name="siswa" value="{{$datasiswa->nama}}">
            <label for="guru">To :</label>
            <input type="text" name="guru" disabled value="{{$dataguru->nama}}">
            <label for="layanan">Pilih tipe layanan</label>
            <select name="layanan">
                @foreach ($datalayanan as $item)
                    <option value="{{$item->id}}">{{$item->jenis_layanan}}</option>
                @endforeach
            </select>
            <label for="alasan">Alasan</label>
            <input name="alasan" type="text" style="height: 300px">

            <button type="submit">Les go</button>
    </form>
</body>
</html>