@extends('layouts.backend.app')

@section('title','Edit Kelas')

@section('content')
<div class="main-content-wrap sidenav-open d-flex flex-column">
    <div class="main-content">

    
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Edit Data</h5>
            </div>
            <div class="modal-body">
                <form action="{{ route('staff.kelas.update',$kelas->id) }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('put') }}
                    <div class="row">
                        <div class="col-md-12 form-group mb-3">
                            <label>Nama Kelas</label>
                            <input type="text" class="form-control" value="{{ $kelas->nama_kelas }}" name="nama_kelas" required placeholder="update Nama Kelas..." autocomplete="off">
                        </div>
            </div>
            <div class="modal-footer">
                <a href="{{ route('staff.kelas.index') }}" class="btn btn-secondary" data-dismiss="modal">Batal</a>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
    </div>
</div>
@stop