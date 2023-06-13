@extends('layouts.main')

@section('content')
<style>
    #man {
        resize: none;
    }
</style>
<div class="content">
    @if ($errors->any())
    <div class="mt-2 alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form method="POST" action="/walas/kerawanan/update/{{$petaKerawanan->id}}">
        @csrf
        @method('PUT')

        <div class="mt-3">
            <label for="siswa_id" class="form-label">Siswa</label>
            <select class="form-select mt-1" data-toggle="select2" name="siswa_id" id="siswa_id" readonly>
                @foreach ($siswa as $item)
                <option value="{{ $item->id }}" @if($item->id == $petaKerawanan->siswa_id) selected @endif>{{ $item->nama }}</option>
                @endforeach
            </select>
        </div>

        <div class="mt-3">
            <label for="siswa_id">Wali Kelas</label>
            <input type="text" id="walas_id" class="form-control" value="{{ $walas->nama }}" style="margin-top: 5px;" readonly>
            <input type="hidden" name="walas_id" value="{{ $walas->id }}">
        </div>

        <div class="mt-3">
            <label for="jenis_kerawanan">Jenis Kerawanan</label>
            <select class="tom-select mt-3" name="jenis_kerawanan[]" {{ in_array($jenisKerawanan, explode(',', $petaKerawanan->jenis_kerawanan)) ? 'selected' : '' }} data-toggle="select2" multiple required>
                @foreach ($jenisKerawanan as $jenis)
                <option value="{{ $jenis }}" {{ in_array($jenis, explode(',', $petaKerawanan->jenis_kerawanan)) ? 'selected' : '' }}>
                    {{ $jenis }}
                </option>
                @endforeach
            </select>
        </div>

        <div class="mt-2">
            <label class="form-label" for="validationCustom02">Kesimpulan</label>
            <textarea name="kesimpulan" required class="form-control" id="man" rows="5">{{$petaKerawanan->kesimpulan}}</textarea>
        </div>

        <div class="mt-3">
            <button type="submit" class="btn btn-primary">Simpan</button>

        </div>
    </form>

</div>

@endsection