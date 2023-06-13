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
                </div>            </div>
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
                        <td style="width: 20rem;text-align: center;">{{$item->jenis_kerawanan}}</td>
                        <td style="width: 25rem;text-align: center;">{{$item->kesimpulan}}</td>
                        <td>
                            <div style="display: flex;">
                            <a href="/walas/kerawanan/edit/{{$item->id}}" ><i data-lucide="check-square" class="w-4 h-4 mr-1" ></i></a>
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

      <!-- Delete Modal -->
      <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Hapus Siswa</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Apakah Anda yakin ingin menghapus data ini?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <form id="deleteForm" method="POST" action="/walas/kerawanan/delete/{{$item->id}}"  class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

   
@endsection