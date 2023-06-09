@extends('layouts.main')

@section('content')
<div class="content">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Daftar Peta Kerawanan</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Siswa</th>
                                <th>Jenis Kerawanan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($petaKerawanans as $key => $petaKerawanan)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $petaKerawanan->siswa->nama }}</td>
                                    <td>{{ $petaKerawanan->jenis_kerawanan }}</td>
                                    <td>
                                        <a href="{{ route('peta.peta-kerawanan.edit', $petaKerawanan->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                        <form action="{{ route('peta.peta-kerawanan.destroy', $petaKerawanan->id) }}" method="POST" style="display: inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection