@extends('layouts.main')

@section('content')

<div class="content">
    @if ($message = Session::get('success'))

<div class="alert alert-success">
    <p>{{$message}}</p>
</div>
@endif
    <div class="container-fluid">
        @if ($errors->any())
            <div class="mt-2 alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" action="{{route('peta-kerawanan.store')}}">
            @csrf

            <div class="mt-2" >
                <label for="siswa_id">Wali Kelas</label>
                <select class="tom-select" name="walas_id" data-toggle="select2">
                        <option value="{{ $walas->id }}">{{ $walas->nama }}</option>
                </select>
            </div>
            
            <div class="mt-2">
                <label for="siswa_id">Siswa</label>
                <select class="tom-select" name="siswa_id" data-toggle="select2">
                    @foreach ($siswa as $item)
                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                    @endforeach
                </select>
            </div>
            
            <div class="mt-2">
                <label for="">Jenis Kerawanan</label>
            </div>
            <select class="tom-select" name="jenis_kerawanan[]" data-toggle="select2" multiple="multiple" required data-placeholder="Choose ...">
                @foreach ($jenisKerawanan as $jenis)
                <option value="{{$jenis}}">{{$jenis}}</option>
                @endforeach
            </select>

            <div class="mt-2">
                <label class="form-label" for="validationCustom02">Kesimpulan</label>  
                <textarea name="kesimpulan" required  class="form-control" id="man" rows="5"></textarea>
            </div>

            <div class="mt-3">
                <button type="submit" class="btn btn-primary">Tambah</button>
    
            </div>
        </form>

    </div>
</div>
   

@endsection
