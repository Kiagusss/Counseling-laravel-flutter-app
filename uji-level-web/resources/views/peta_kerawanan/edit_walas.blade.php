@extends('layouts.main')

@section('content')

<style>
    #man {
        resize: none;
    }
</style>

<div class="content">
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Form Kerawanan
        </h2>
    </div>
    <div class="grid  gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Input -->
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">
                        Edit Data Kerawanan
                    </h2>
                    @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                    @endif
                </div>
                <div id="input" class="p-5">
                    <div class="preview">
                        <form action="{{ route('peta-kerawanan.update', $petaKerawanan->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="mt-2">
                                <label class="form-label" for="validationCustom02">Wali Kelas</label>
                                <input type="text" id="walas_id" class="form-control" value="{{ $walas->nama }}" readonly>
                                <input type="hidden" name="walas_id" value="{{ $walas->id }}">
                            </div>

                            <div class="mt-2">
                                <label class="form-label" for="validationCustom02">Siswa</label>
                                <select name="siswa_id" id="siswa_id" class="tom-select form-control">
                                    @foreach ($siswa as $item)
                    @if($errors->any())
                    <div class="mt-2 alert alert-danger">
                        <ul class="mb-0">
                            @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                        </ul>
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
                            <select name="siswa_id" id="siswa_id" class="tom-select form-control" required>
                                @foreach ($siswa as $item)
                                    <option value="{{ $item->id }}" @if ($item->id == $petaKerawanan->siswa_id) selected @endif>{{ $item->nama }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mt-2">
                                <label class="form-label" for="validationCustom02">Jenis Kerawanan</label>
                                <select class="tom-select" name="jenis_kerawanan[]" {{ in_array($jenisKerawanan, explode(',', $petaKerawanan->jenis_kerawanan)) ? 'selected' : '' }} data-toggle="select2" multiple>
                                    @foreach ($jenisKerawanan as $jenis)
                        <div class="form-group">
                            <label for="jenis_kerawanan">Jenis Kerawanan</label>
                            <select class="tom-select" name="jenis_kerawanan[]" {{ in_array($jenisKerawanan, explode(',', $petaKerawanan->jenis_kerawanan)) ? 'selected' : '' }} data-toggle="select2" multiple required>
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

                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>

                <!-- END: Input -->
            </div>
        </div>
    </div>
    <!-- END: Content -->
    @endsection