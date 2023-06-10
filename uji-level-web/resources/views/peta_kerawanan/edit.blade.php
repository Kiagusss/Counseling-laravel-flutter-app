@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data Peta Kerawanan</div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('peta.peta-kerawanan.update', $petaKerawanan->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="walas_id">Wali Kelas</label>
                            <input type="text" id="walas_id" class="form-control" value="{{ $walas->nama }}" readonly>
                            <input type="hidden" name="walas_id" value="{{ $walas->id }}">
                        </div>

                        <div class="form-group">
                            <label for="siswa_id">Siswa</label>
                            <select name="siswa_id" id="siswa_id" class="form-control">
                                @foreach ($siswa as $item)
                                    <option value="{{ $item->id }}" @if ($item->id === $petaKerawanan->siswa_id) selected @endif>{{ $item->nama }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="jenis_kerawanan">Jenis Kerawanan</label>
                            <select name="jenis_kerawanan[]" id="jenis_kerawanan" class="form-control" multiple>
                                <option value="Kerawanan 1" @if (in_array('Kerawanan 1', explode(',', $petaKerawanan->jenis_kerawanan))) selected @endif>Kerawanan 1</option>
                                <option value="Kerawanan 2" @if (in_array('Kerawanan 2', explode(',', $petaKerawanan->jenis_kerawanan))) selected @endif>Kerawanan 2</option>
                                <option value="Kerawanan 3" @if (in_array('Kerawanan 3', explode(',', $petaKerawanan->jenis_kerawanan))) selected @endif>Kerawanan 3</option>
                                <!-- Tambahkan opsi lainnya jika diperlukan -->
                            </select>
                        </div>
                        <textarea name="kesimpulan" id="" cols="30" rows="10" value="{{$peta->kesimpulan}}"></textarea>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection