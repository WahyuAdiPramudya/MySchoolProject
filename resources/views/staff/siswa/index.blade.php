@extends('layouts.backend.app')

@section('title','Siswa')

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
                    <h4 class="card-title mb-3">Data Siswa</h4>
                    <a class="btn btn-twitter btn-icon m-1" href="{{ route('staff.siswa.create') }}">
                        <span class="ul-btn__icon"><i class="i-Add-User"></i></span>
                        <span class="ul-btn__text">Tambah Data</span>
                    </a><br><br>
                    <div class="table-responsive">
                     <div class="table-responsive">
                        <table id="test" class="table" style="width:100%">
                            <thead>
                                <tr>
                                    <th scope="col">Nisn</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Agama</th>
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


@stop
@push('js')
<script>
    $(function() {
    $('#test').DataTable({
        processing: true, 
        serverSide: true,
        ajax: "/staff/siswas/datatable",
        columns: [
            { data: 'nisn', name: 'nisn' },
            { data: 'nama', name: 'nama' },
            { data: 'agama', name: 'agama' },
            {data: 'action', name: 'action', orderable: false, searchable: false}
         ]
    });
})

    function deletesiswa(nisn){
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
                document.getElementById('delete-form-'+nisn).submit();

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

