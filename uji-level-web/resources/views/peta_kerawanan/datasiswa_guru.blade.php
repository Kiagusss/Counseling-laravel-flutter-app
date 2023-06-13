@extends('layouts.main')


@section('content')

<div class="content">
    <h2 class="intro-y text-lg font-medium mt-10">
        Data Siswa/Siswi Dari {{ $kelas->nama }}
    </h2>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
            <div class="dropdown">
            </div>
            <div class="hidden md:block mx-auto text-slate-500">Showing 1 to 10 of 150 entries</div>
            <a href="{{route('siswa.index')}}"><button class="dropdown-toggle btn px-2 box" style="margin-right: 7px;">Show All data</button></a>
            <div class="w-full sm:w-auto mt-3 sm:mt-5 sm:ml-auto md:ml-0">
                <div class="w-56 relative text-slate-500">
                    <form action="{{ url('siswa/search')}}" method="GET">
                        <input type="text" class="form-control w-56 box pr-10" placeholder="Search..." name="keyword">
                        <button type="submit"><i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-lucide="search" style="position: absolute; top: -15px;"></i> </button>
                </div>
            </div>
        </div>
        <!-- BEGIN: Data List -->
        <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
            <table class="table table-report -mt-2">
                <thead>
                    <tr>
                        <th class="whitespace-nowrap" style="text-align: center;">No.</th>
                        <th class="whitespace-nowrap" style="text-align: center;">Nisn</th>
                        <th class="whitespace-nowrap" style="text-align: center;">Nama</th>
                        <th class="whitespace-nowrap" style="text-align: center;">Kelas</th>
                        <th class="whitespace-nowrap" style="text-align: center;">TTL</th>
                        <th class="whitespace-nowrap" style="text-align: center;">Jenis Kelamin</th>
                        <th class="whitespace-nowrap">PDF</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="intro-x">
                        @foreach ($siswa as $item)
                        <td style="text-align: center;">
                            <a href="" class="font-medium whitespace-nowrap">{{$loop->iteration}}</a>
                        </td>
                        <td style="text-align: center;">
                            <a href="" class="font-medium whitespace-nowrap">{{$item->nisn}}</a>
                        </td>
                        <td style="text-align: center;">
                            <a href="" class="font-medium whitespace-nowrap">{{$item->nama}}</a>
                        </td>
                        <td style="text-align: center;">
                            <a href="" class="font-medium whitespace-nowrap">{{$item->kelasid->walas->nama}}</a>
                        </td>
                        <td style="text-align: center;">
                            <a href="" class="font-medium whitespace-nowrap">{{$item->ttl}}</a>
                        </td>
                        <td style="text-align: center;">
                            <a href="" class="font-medium whitespace-nowrap">{{$item->jenis_kelamin}}</a>
                        </td>
                        <td style="text-align: center;">
                            <div style="align-items: center;">
                            <a href="/guru/pdf/{{$item->id}}"> <i data-lucide="file-text" class="w-4 h-4"></i></a>
                            </div>
                        </td>
                        </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        @endsection