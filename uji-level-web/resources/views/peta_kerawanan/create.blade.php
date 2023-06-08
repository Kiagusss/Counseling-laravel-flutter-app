@extends('layouts.main')

@section('content')
<<div class="container">
    <h1>Tambah Peta Kerawanan</h1>

    <form action="{{ route('peta-kerawanan.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="walas_id">Walas ID</label>
            <input type="text" id="walas_id" name="walas_id" class="form-control" value="{{ $guru->walas_id }}" readonly>
        </div>

        <div class="form-group">
            <label for="siswa_id">Siswa</label>
            <select id="siswa_id" name="siswa_id" class="form-control">
                @foreach ($siswaList as $siswa)
                    <option value="{{ $siswa->id }}">{{ $siswa->nama }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="jenis_kerawanan">Jenis Kerawanan</label>
            <select id="jenis_kerawanan" name="jenis_kerawanan[]" class="form-control" multiple>
                <option value="Bully">Bully</option>
                <option value="Perundungan">Perundungan</option>
                <option value="Kekerasan Fisik">Kekerasan Fisik</option>
                <!-- Tambahkan opsi lainnya sesuai kebutuhan -->
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection