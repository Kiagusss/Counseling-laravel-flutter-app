@extends('layouts.main')

@section('content')



<div class="content">
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Form Kelas
        </h2>
    </div>
    <div class="grid  gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Input -->
            <div class="intro-y box">
                <div
                    class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">
                        Input data kelas
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
                        <form method="POST" action="{{ route('kelas.store') }}">
                            @csrf
                            <div class="mt-3">
                                <label for="regular-form-1" class="form-label">Nama Kelas</label>
                                <input id="regular-form-1" type="text" name="nama" class="form-control"
                                    placeholder="Masukkan Nama Kelas" value="">
                            </div>
                            <div class="mt-3">
                                <label for="regular-form-1" class="form-label">Wali Kelas</label>
                                <select name="walas_id" class="tom-select mb-3">
                                    @foreach($walas as $walas)
                                    <option value="{{ $walas->id }}">{{ $walas->nama }}</option>
                                @endforeach
                                </select>
                            </div>
                            <div class="mt-3">
                                <label for="regular-form-1" class="form-label">Guru BK</label>
                                <select name="guru_id" class="tom-select mb-3">
                                    @foreach($gurus as $guru)
                                    <option value="{{ $guru->id }}">{{ $guru->nama }}</option>
                                @endforeach
                                  
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                          
                        </form>
                    </div>
                </div>
                <!-- END: Input -->
            </div>
        </div>
    </div>
    <!-- END: Content -->

@endsection