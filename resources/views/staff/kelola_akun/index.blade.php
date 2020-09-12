@extends('layouts.backend.app')

@section('title','Akun')

@section('content')
@push('css')
<link rel="stylesheet" href="{{asset('assets/backend/assets/styles/vendor/datatables.min.css')}}">
@endpush
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@include('sweet::alert')
<div class="main-content-wrap sidenav-open d-flex flex-column">
    <div class="main-content">
        <div class="col-md-12 mb-6">
            <div class="card text-left">
                <div class="card-body">
                    <h4 class="card-title mb-3">Data Akun Sekolah</h4>
                   
                    <div class="table-responsive">
                     <div class="table-responsive">
                        <table id="akun" class="table" style="width:100%">
                            <thead>
                                <tr>
                                    <th scope="col">Nama</th>
                                    <th scope="col">No Telepon</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Role</th>
                                    <th scope="col" style="text-align: center;">Action</th>
                                </tr>
                            </thead>
                           
                        </table>
                    </div>
             </div>
         </div>
     </div>
 </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Add Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('staff.guru.store') }}" method="post">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-12 form-group mb-3">
                            <label>Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama_lengkap" required placeholder="isi Nama lengkap..." autocomplete="off">
                        </div>
                        <div class="col-md-12 form-group mb-3">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" required placeholder="isi Email ..." autocomplete="off">
                        </div>
                        <div class="col-md-12 form-group mb-3">
                            <label>No telp</label>
                            <input type="number" class="form-control" name="no_telp" required placeholder="isi Nomor Telepon..." autocomplete="off">
                        </div>
                        <div class="col-md-12 form-group mb-3">
                            <label>Password</label>
                            <input type="Password" class="form-control" name="password" required placeholder="isi Password..." autocomplete="off">
                        </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
   
@stop
@push('js')
<script>
    $(function() {
    $('#akun').DataTable({
        processing: true, 
        serverSide: true,
        ajax: "/staff/akun/datatable",
        columns: [
            { data: 'nama_lengkap', name: 'nama_lengkap' },
            { data: 'no_telp', name: 'no_telp' },
            { data: 'status', name: 'status' },
            { data: 'role', name: 'role' },
            {data: 'action', name: 'action', orderable: false, searchable: false}
         ]
    });
})

    function deleteAkun(id){
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-success',
                cancelButton: 'btn btn-danger'
            },
            buttonsStyling: false
        })

        swalWithBootstrapButtons.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!',
            reverseButtons: true
        }).then((result) => {
            if (result.value) {
                event.preventDefault();
                document.getElementById('delete-form-'+id).submit();

            } else if (
                /* Read more about handling dismissals below */
                result.dismiss === Swal.DismissReason.cancel
                ) {
                swalWithBootstrapButtons.fire(
                    'Cancelled',
                    'Your data is safe :)',
                    'error'
                )
    }
})
}  

         
</script>
<script src="{{asset('assets/backend/assets/js/common-bundle-script.js')}}"></script>
<script src="{{asset('assets/backend/assets/js/vendor/datatables.min.js')}}"></script>
<script src="{{asset('assets/backend/assets/js/datatables.script.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
@endpush

 