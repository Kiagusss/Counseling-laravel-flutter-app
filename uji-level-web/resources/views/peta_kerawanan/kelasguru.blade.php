@extends('layouts.main')

@section('content')

<div class="content" style="padding-top: 10rem;">
                        
    <!-- start page title -->
    <!-- <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Kerawanan</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Kelas</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>      -->
    <!-- end page title --> 
    <div class="card mt-3">
        <div class="card-body">
            <table class="table table-hover table-centered mb-0">
                <thead>
                    <tr>
                        <th></th>
                        <th>No</th>
                        <th>Kelas</th>
                        <th>Walas</th>
                        <th>Action</th>
                    </tr>
                </thead>
                 <tbody>
                    @foreach($kelas as $s)
                    <tr>
                        <td></td>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$s->nama}}</td>
                        <td>{{$s->walas->nama}}</td>
                        <td> <a
                            href="/guru/siswa/{{ $s->id }}"><button 
                           type="button" class="btn btn-primary mb-2" 
                           >+</button></a>  </td>
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
                    <form id="deleteForm" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function showDeleteModal(guruId) {
            var deleteForm = document.getElementById('deleteForm');
            deleteForm.action = '/walas/kerawanan/delete/' + guruId;
            var deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'));
            deleteModal.show();
        }
    </script>

    <!-- ///guru/siswa/{{Auth::user()->id}} -->
@endsection
