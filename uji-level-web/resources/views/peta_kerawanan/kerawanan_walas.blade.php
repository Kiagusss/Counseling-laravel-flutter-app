@extends('layouts.main')

@section('content')

<div class="content">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb mt-5">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Kerawanan</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- end page title -->
    <div class="mb-3">

    <a href="{{route('peta-kerawanan.add')}}" type="button" class="btn btn-primary" style="margin-top: 20px;">Add New</a>
    @if ($message = Session::get('success'))

    <div class="alert alert-success mt-3 mb-3">
        <p>{{$message}}</p>
    </div>
    @endif

        <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
            <a href="{{route('peta-kerawanan.add')}}" type="button" class="btn btn-primary" style="margin-top: 20px;">Add New</a>
            <div class="dropdown">
            </div>
            <div class="hidden md:block mx-auto text-slate-500">Showing 1 to 10 of 150 entries</div>
            <a href="/walas/kerawanan/index"><button class="dropdown-toggle btn px-2 box" style="margin-right: 7px;">Show All data</button></a>
            <div class="w-full sm:w-auto mt-3 sm:mt-5 sm:ml-auto md:ml-0">
                <div class="w-56 relative text-slate-500">
                <form action="{{ route('walas.peta') }}" method="GET">
                        <input type="text" class="form-control w-56 box pr-10" placeholder="Search..." name="query">
                        <button type="submit"><i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-lucide="search" style="position: absolute; top: -15px;"></i> </button>
                </div>
            </div>
        </div>

    </div>

    <div class="card">
        <div class="card-body">
            <table class="table table-hover table-centered mb-0">
                <thead>
                    <tr>
                        <th style="text-align: center;">No</th>
                        <th style="text-align: center;">Siswa</th>
                        <th style="text-align: center;">Kerawanan</th>
                        <th style="text-align: center;">Kesimpulan</th>
                        <th style="text-align: center;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($peta as $item)
                    <tr>
                        <td style="text-align: center;">{{$loop->iteration}}</td>
                        <td style="text-align: center;">{{$item->siswa->nama}}</td>
                        <td style="width: 25rem;text-align: center;">{{$item->jenis_kerawanan}}</td>
                        <td style="width: 30rem;text-align: center;">{{$item->kesimpulan}}</td>
                        <td>
                            <div style="display: flex;">
                                <a href="/walas/kerawanan/edit/{{$item->id}}"><i data-lucide="check-square" class="w-4 h-4 mr-1"></i></a>
                                <form id="deleteForm" action="/walas/kerawanan/delete/{{$item->id}}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"><i data-lucide="trash" class="w-4 h-4 mr-2" style=" margin-left: 5px;"></i></button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>

<!--  -->


@endsection