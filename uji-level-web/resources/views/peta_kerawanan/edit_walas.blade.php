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

                    <form action="{{ route('peta-kerawanan.update', $petaKerawanan->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="walas_id">Wali Kelas</label>
                            <input type="text" id="walas_id" class="form-control" value="{{ $walas->nama }}" readonly>
                            <input type="hidden" name="walas_id" value="{{ $walas->id }}">
                        </div>

                        <div class="form-group">
                            <label for="siswa_id">Siswa</label>
                            <select name="siswa_id" id="siswa_id" class="tom-select form-control">
                                @foreach ($siswa as $item)
                                    <option value="{{ $item->id }}" @if ($item->id == $petaKerawanan->siswa_id) selected @endif>{{ $item->nama }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="jenis_kerawanan">Jenis Kerawanan</label>
                            <select class="tom-select" name="jenis_kerawanan[]" {{ in_array($jenisKerawanan, explode(',', $petaKerawanan->jenis_kerawanan)) ? 'selected' : '' }} data-toggle="select2" multiple>
                                @foreach ($jenisKerawanan as $jenis)
                                    <option value="{{ $jenis }}" {{ in_array($jenis, explode(',', $petaKerawanan->jenis_kerawanan)) ? 'selected' : '' }}>
                                        {{ $jenis }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mt-2">
                            <label class="form-label" for="validationCustom02">Kesimpulan</label>  
                            <textarea name="kesimpulan" required  class="form-control" id="man" rows="5">{{$petaKerawanan->kesimpulan}}</textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection