{{-- @extends('layouts.main')

@section('content')
@if ($message = Session::get('success'))

<div class="alert alert-success">
    <p>{{$message}}</p>
</div>
@endif
<div class="container-fluid">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                        <li class="breadcrumb-item active">Siswa</li>
                    </ol>
                </div>
                <h4 class="page-title">Data Kerawanan</h4>
            </div>
        </div>
    </div>     
    <!-- end page title --> 
    <div class="mb-3">
    <a href="{{route('peta-kerawanans.kelas')}}" type="button" class="btn btn-primary">Add New</a>

    </div>

    <div class="card">
        <div class="card-body">
            <table class="table table-hover table-centered mb-0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Siswa</th>
                        <th>Kelas</th>
                        <th>Kerawanan</th>
                        <th>Wali Kelas</th>
                        <th>Kesimpulan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($petaKerawanan as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->siswa->nama}}</td>
                        <td>{{$item->siswa->kelas->nama}}</td>
                        <td>{{$item->jenis_kerawanan}}</td>
                        <td>{{$item->siswa->kelas->walas->nama}}</td>
                        <td>{{$item->kesimpulan}}</td>
                        <td>
                            <a href="/guru/kerawanan/edit/{{$item->id}}" class="btn btn-primary">Edit</a>
                            <form id="deleteForm" action="/guru/kerawanan/delete/{{$item->id}}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
        
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
                                                    
  </div> --}}

      
  @extends('layouts.main')


@section('content')
    
<div class="content">
    <h2 class="intro-y text-lg font-medium mt-10">
        Data Siswa/Siswi
    </h2>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
            <a href="{{route('peta-kerawanans.kelas')}}"><button class="btn btn-primary shadow-md mr-2" >Tambah Data Siswa</button>
            </a>
            <div class="dropdown">
                <button class="dropdown-toggle btn px-2 box" aria-expanded="false" data-tw-toggle="dropdown">
                    <span class="w-5 h-5 flex items-center justify-center"> <i class="w-4 h-4" data-lucide="plus"></i> </span>
                </button>
                <div class="dropdown-menu w-40">
                    <ul class="dropdown-content">
                        <li>
                            <a href="" class="dropdown-item"> <i data-lucide="printer" class="w-4 h-4 mr-2"></i> Print </a>
                        </li>
                        <li>
                            <a href="/siswa/export" class="dropdown-item"> <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export to Excel </a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item"> <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export to PDF </a>
                        </li>
                    </ul>
                </div>
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
                        <th class="whitespace-nowrap">No</th>
                        <th class="whitespace-nowrap">Siswa</th>
                        <th class="whitespace-nowrap">Kelas</th>
                        <th class="whitespace-nowrap">Kerawanan</th>
                        <th class="whitespace-nowrap">Wali Kelas</th>
                        <th class="whitespace-nowrap">Kesimpulan</th>
                        <th class="whitespace-nowrap">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="intro-x">
                        @foreach ($petaKerawanan as $item)
                        <td>
                            <a href="" class="font-medium whitespace-nowrap">{{$loop->iteration}}</a> 
                        </td>
                        <td>
                            <a href="" class="font-medium whitespace-nowrap">{{$item->siswa->nama}}</a> 
                        </td>
                        <td>
                            <a href="" class="font-medium whitespace-nowrap">{{$item->siswa->kelas->nama}}</a> 
                        </td>
                        <td>
                            <a href="" class="font-medium whitespace-nowrap">{{$item->jenis_kerawanan}}</a> 
                        </td>
                        <td>
                            <a href="" class="font-medium whitespace-nowrap">{{$item->siswa->kelas->walas->nama}}</a> 
                        </td>
                        <td>
                            <a href="" class="font-medium whitespace-nowrap">{{$item->kesimpulan}}</a> 
                        </td>
                        <td style="display: flex; height: 50px;">
                            <div>
                                <a href="siswa/update/{{$item->id}}"> <i data-lucide="check-square" class="w-4 h-4 mr-1" style="margin-top: 7px;"></i></a>
                            </div>
                            <form action="/siswa/destroy/{{$item->id}}" method="POST"  onsubmit="return confirm('mau hapus?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit"><i data-lucide="trash" class="w-4 h-4 mr-2" style="margin-top: 7px; margin-left: 5px;"></i></button>
                            </td>
                            </form>
                        </td>
                    </tr>
                        @endforeach
                        
                    </tr>
                </tbody>
            </table>
            {{-- {{ $petaKerawanan->links() }} --}}
        </div>
        @if (Session::has('success'))
      toastr()->success('Data has been saved successfully!');
      @endif
@endsection
