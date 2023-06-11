@extends('layouts.main')

@section('content')

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
    <a href="{{route('peta-kerawanan.add')}}" type="button" class="btn btn-primary">Add New</a>

    </div>

    <div class="card">
        <div class="card-body">
            <table class="table table-hover table-centered mb-0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Siswa</th>
                        <th>Kerawanan</th>
                        <th>Kesimpulan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($peta as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->siswa->nama}}</td>
                        <td>{{$item->jenis_kerawanan}}</td>
                        <td>{{$item->kesimpulan}}</td>
                        <td>
                            <a href="/walas/kerawanan/edit/{{$item->id}}" class="btn btn-primary">Edit</a>
                            <form id="deleteForm" action="/walas/kerawanan/delete/{{$item->id}}" method="POST" class="d-inline">
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