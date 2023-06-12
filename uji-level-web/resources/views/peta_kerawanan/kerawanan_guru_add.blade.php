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
                        Input data Kerawanan
                    </h2>
                    @if($errors->any())
                    <div class="mt-2 alert alert-danger">
                        <ul class="mb-0">
                            @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                </div>
                <div id="input" class="p-5">
                    <div class="preview">
                        <form method="POST" action="{{route('peta-kerawanans.store')}}">
                            @csrf

                            <div class="mt-3">
                                <label for="regular-form-1" class="form-label">Wali Kelas</label>
                                <select class="tom-select mb-3" name="walas_id" data-toggle="select2">
                                    <option value="{{ $wakel->id }}">{{ $wakel->nama }}</option>
                                </select>
                            </div>

                            <div class="mt-2">
                                <label for="regular-form-1" class="form-label">Siswa</label>
                                <select class="tom-select mb-3" name="siswa_id" data-toggle="select2">
                                    @foreach ($siswa as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mt-3">
                                <label for="regular-form-1" class="form-label">Siswa</label>
                                <select class="tom-select mb-3" name="jenis_kerawanan[]" data-toggle="select2" multiple="multiple" required data-placeholder="Choose ...">
                                    @foreach ($jenisKerawanan as $jenis)
                                    <option value="{{$jenis}}">{{$jenis}}</option>
                                    @endforeach
                                </select>
                            </div>


                            <div class="mt-2">
                                <label class="form-label" for="validationCustom02">Kesimpulan</label>
                                <textarea name="kesimpulan" required class="form-control" id="man" rows="5"></textarea>
                            </div>

                            <div class="mt-3">
                                <button type="submit" class="btn btn-primary">Tambah</button>

                            </div>
                        </form>
                    </div>
                </div>

                <!-- END: Input -->
            </div>
        </div>
    </div>
    <!-- END: Content -->

    @endsection