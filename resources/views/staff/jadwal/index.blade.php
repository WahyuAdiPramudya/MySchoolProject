@extends('layouts.backend.app')

@section('title','Jadwal')

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
                    <h4 class="card-title mb-3">Data Berita</h4>
                    <a class="btn btn-twitter btn-icon m-1" href="{{ route('staff.jadwal.create') }}">
                        <span class="ul-btn__icon"><i class="i-Add-User"></i></span>
                        <span class="ul-btn__text">Tambah Data</span>
                    </a><br><br>
                    <div class="table-responsive">
                        <table id="zero_configuration_table" class="table" style="width:100%">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Jadwal</th>
                                    <th scope="col">Kelas</th>
                                    <th scope="col">File</th>
                                    <th scope="col" style="text-align: center;">Action</th>
                                </tr>
                            </thead>
                            @foreach($data as $key => $row)
                            <tbody>
                                <tr>
                                    <td>{{ $key+1}}</td>
                                    <td>{{ $row->nama_jadwal }}</td>
                                    <td>{{ $row->id_kelas}}</td>
                                    <td>{{$row->file_jadwal}}</td>
                                    <td>
                                        <center>

                                            <center>
                                                <a href="{{ route('staff.berita.edit',$row->id_jadwal) }}" class="text-success mr-2">
                                                 <i class="nav-icon i-Pen-2 font-weight-bold"></i>
                                             </a>
                                             <a type="button" onclick="deleteberita({{ $row->id_jadwal }})" class="text-danger mr-2">
                                               <i class="nav-icon i-Close-Window font-weight-bold"></i>
                                           </a>
                                           <a href="{{route('staff.jadwal.show', $row->id_jadwal)}}">
                                               <i class="nav-icon i-Eye font-weight-bold"></i>
                                           </a>
                                       </center>
                                 </center>

                                 <form  id="delete-form-{{$row->id_jadwal}}" style="display:none;" action="{{ route('staff.berita.destroy',$row->id_jadwal) }}"  method="POST">
                                   {{ @csrf_field() }}
                                   {{@method_field('DELETE')}}
                               </form>
                           </td>
                       </tr>
                   </tbody>
                   @endforeach
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

    function deleteberita(id_jadwal){
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
                document.getElementById('delete-form-'+id_jadwal).submit();

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

