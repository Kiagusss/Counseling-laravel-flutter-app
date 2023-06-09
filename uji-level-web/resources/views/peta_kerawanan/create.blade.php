@extends('layouts.main')

@section('content')
<div class="container">
    <h1>Create Peta Kerawanan</h1>

    <form action="peta-kerawanan" method="POST">
        @csrf
        <div class="form-group">
            <input type="hidden" name="walas_id" value="{{ $walas->id }}">
            <label for="siswa_id">Siswa</label>
            <select name="siswa_id" id="siswa_id" class="form-control">
                @foreach ($siswa as $siswa)
                    <option value="{{ $siswa->id }}">{{ $siswa->nama }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="jenis_kerawanan">Jenis Kerawanan</label>
            <select name="jenis_kerawanan[]" id="jenis_kerawanan" class="tom-select" multiple>
                <option value="Bullying">Bullying</option>
                <option value="Kekerasan">Kekerasan</option>
                <option value="Perundungan">Perundungan</option>
                <!-- Tambahkan pilihan jenis kerawanan lainnya di sini -->
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection