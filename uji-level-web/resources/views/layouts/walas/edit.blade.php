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
                        <form action="{{ url('walas/update/'.$walas->id)}}" method="POST">
                            @csrf
                            @method('PATCH')
                            <div class="mt-3">
                                <label for="regular-form-1" class="form-label">NIPD</label>
                                <input id="regular-form-1" type="text" name="nipd" class="form-control"
                                    placeholder="Input text" value="{{$walas->nipd}}">
                            </div>
                            <div class="mt-3">
                                <label for="regular-form-1" class="form-label">Nama</label>
                                <input id="regular-form-1" type="text" name="nama" class="form-control"
                                    placeholder="Input text" value="{{$walas->nama}}">
                            </div>
                            <div class="mt-3">
                                <label for="regular-form-1" class="form-label">Email</label>
                                <input id="regular-form-1" type="text" name="email" class="form-control"
                                    placeholder="Input text" value="{{$walas->user->email}}">
                            </div>
                            <div class="mt-3">
                                <label for="regular-form-1" class="form-label">Password</label>
                                <input id="regular-form-1" type="password" name="password" class="form-control"
                                    placeholder="Input text" value="{{$walas->user->password}}">
                            </div>
                            <div class="relative w-56 mt-3">
                                <label for="regular-form-1" class="form-label">TTL</label>
                              <input type="date" name="ttl" id="" value="{{$walas->ttl}}">
                            </div>
                            <div class="mt-3">
                                <label for="regular-form-1" class="form-label">Jenis Kelamin</label>
                                <select name="jenis_kelamin" class="tom-select mb-3">

                                    <option value="pria" {{ $walas->jenis_kelamin === 'pria' ? 'selected' : '' }}>Pria</option>
                                    <option value="perempuan" {{ $walas->jenis_kelamin === 'perempuan' ? 'selected' : '' }}>Perempuan</option>
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
