@extends('layouts.main')


@section('content')
<div class="content">
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Regular Form
        </h2>
    </div>
    <div class="grid  gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Input -->
            <div class="intro-y box">
                <div
                    class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">
                        Input
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
                            <div class="mt-3">
                                <label for="regular-form-1" class="form-label">Dari</label>
                                <input disabled id="regular-form-1" type="text" name="nipd" class="form-control"
                                    placeholder="Input text" value="{{$data->siswa->nama}}">
                            </div>
                            <div class="mt-3">
                                <label for="regular-form-1" class="form-label">Kepada</label>
                                <input disabled id="regular-form-1" type="text" name="nama" class="form-control"
                                    placeholder="Input text" value="{{$data->guru->nama}}">
                            </div>
                            <div class="mt-3">
                                <label for="regular-form-1" class="form-label">Layanan yang diminta</label>
                                <input disabled id="regular-form-1" type="text" name="password" class="form-control"
                                    placeholder="Input text" value="{{$data->layanan->jenis_layanan}}">
                            </div>
                            <div class="mt-3">
                                <label for="regular-form-1" class="form-label">Judul</label>
                                <input disabled id="regular-form-1" type="text" name="password" class="form-control"
                                    placeholder="Input text" value="{{$data->judul}}">
                            </div>
                            <div class="mt-3">
                                <label for="regular-form-1" class="form-label">Alasan</label>
                                <input disabled id="regular-form-1" type="text" name="email" class="form-control h-40"
                                    placeholder="Input text" value="{{$data->alasan}}">
                            </div>
                            
                            <div class="flex">
                                <a href="/layanan-bk-reschedule-{{$data->id}}"><button type="submit" class="btn btn-success mt-3 text-white">Approve</button></a>
                                <form action="/layanan-bk-cancel-{{$data->id}}" method="POST">
                                    @method('PATCH')
                                    @csrf
                                    <a href=""><button type="submit" class="btn btn-danger mt-3 ml-3">Cancel</button></a>
                                </form>
                            </div>
                          
                    </div>
                </div>
                <!-- END: Input -->
            </div>
        </div>
    </div>
    <!-- END: Content -->


    @endsection
