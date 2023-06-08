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
                </div>
                <div id="input" class="p-5">
                    <div class="preview">
                        <form action="{{ url('siswa/update/'.$siswa->id)}}" method="POST">
                            @method('PATCH')
                            @csrf
                            <div class="mt-3">
                                <label for="regular-form-1" class="form-label">Nisn</label>
                                <input id="regular-form-1" type="text" name="nisn" class="form-control"
                                    placeholder="Input text" value="{{$siswa->nisn}}">
                            </div>
                            <div class="mt-3">
                                <label for="regular-form-1" class="form-label">Nama</label>
                                <input id="regular-form-1" type="text" name="nama" class="form-control"
                                    placeholder="Input text" value="{{$siswa->nama}}">
                            </div>
                            
                            <div class="mt-3">
                                <label for="regular-form-1" class="form-label">Email</label>
                                <input id="regular-form-1" type="text" name="email" class="form-control"
                                    placeholder="Input text" value="{{$siswa->user->email}}">
                            </div>
                            
                            
                            <div class="mt-3">
                                <label for="regular-form-1" class="form-label">Password</label>
                                <input id="regular-form-1" type="text" name="password" class="form-control"
                                    placeholder="Input text" value="{{$siswa->user->password}}">
                            </div>
                            
                            <div class="relative w-56 mt-3">
                                <label for="regular-form-1" class="form-label">TTL</label>
                              <input type="date" name="ttl" id="" value="{{$siswa->ttl}}">
                            </div>
                            <div class="mt-3">
                                <label for="regular-form-1" class="form-label">Jenis Kelamin</label>
                                <select name="jenis_kelamin" class="tom-select mb-3">

                                    <option value="pria" {{ $siswa->jenis_kelamin === 'pria' ? 'selected' : '' }}>Pria</option>
                                    <option value="perempuan" {{ $siswa->jenis_kelamin === 'perempuan' ? 'selected' : '' }}>Perempuan</option>
                                </select>
                            </div>

                            <div class="form-group col-md-12">
                                <label>kelas id</label>
                                <select name="user_id" class="form-control default-select" id="maapel">
                                    <option value="{{ $siswa->kelasid->id }}" selected>{{ $siswa->kelasid->nama }}
                                        @foreach ($kelasid as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama }}</option>
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
