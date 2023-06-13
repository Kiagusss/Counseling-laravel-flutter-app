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
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
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
                        <form action="{{ Auth::user()->hasRole('guru_bk') ? 'layanan-createguru-group' : 'layanan-create-group' }}" method="POST">
                            @csrf
                            <select multiple name="siswa[]" class="tom-select mb-3">
                                @foreach ($datasiswaAll as $item)
                                <option value="{{ $item->id }}">
                                    {{ $item->nama }}
                                  </option>                                
                                @endforeach
                            </select>
                            <div class="mt-3">
                                <label for="regular-form-1" class="form-label">Guru</label>
                                <input disabled id="regular-form-1" type="text" name="nama" class="form-control" placeholder="Nama" value="{{$dataguru->nama}}">
                            </div>
                            <div class="mt-3">
                                <label for="regular-form-1" class="form-label">judul</label>
                                <input id="regular-form-1" type="text" name="judul" class="form-control" placeholder="Judul" value="">
                            </div>
                            <div class="mt-3">
                                <label for="regular-form-1" class="form-label">tujuan</label>
                                <input id="regular-form-1" type="text" name="tujuan" class="form-control" placeholder="Tujuan" value="" style="height: 300px">
                            </div>
                            @if (Auth::user()->hasRole('guru_bk'))
                            <div class="relative w-56 mt-3">
                                <label for="regular-form-1" class="form-label">Atur Jadwal</label>
                              <input type="datetime-local" name="jadwal" id="" value="">
                            </div>
                            @endif
                            <div class="mt-3">
                                <label for="regular-form-1" class="form-label">Jenis Layanan</label>
                                <select name="layanan" class="tom-select mb-3">
                                    @foreach ($datalayanan as $item)
                                    <option value="{{$item->id}}">{{$item->jenis_layanan}}</option>
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