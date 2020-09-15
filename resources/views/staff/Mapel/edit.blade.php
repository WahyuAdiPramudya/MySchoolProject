@extends('layouts.backend.app')

@section('title','Edit Mapel')

@section('content')
<div class="main-content-wrap sidenav-open d-flex flex-column">
    <div class="main-content">

    
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Edit Data</h5>
            </div>
            <div class="modal-body">
                <form action="{{ route('staff.mapel.update',$mapel->id) }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('put') }}
                    <div class="row">
                        <div class="col-md-12 form-group mb-3">
                            <label>Nama Mata Pelajaran</label>
                            <input type="text" class="form-control" value="{{ $mapel->mapel }}" name="mapel" required placeholder="update Nama Mata Pelajaran..." autocomplete="off">
                        </div>
                         <div class="col-md-12 form-group mb-3">
                                        <label for="picker1">Nama Guru</label>
                                        <select class="form-control" id="user_id" name="user_id">
                                            <option disabled="">-- Please select --</option>
                                            @foreach($guru as $row)
                                                <option value="{{ $row->id }}"  <?php if($mapel->id == $row->id) { echo "selected"; } ?>>
                                                        {{ $row->nama_lengkap }}
                                                </option>
                                                @endforeach
                                        </select>
                                    </div>
            </div>
            <div class="modal-footer">
                <a href="{{ route('staff.mapel.index') }}" class="btn btn-secondary" data-dismiss="modal">Batal</a>
                <button type="submit" class="btn btn-success">Simpan</button>
            </div>
            </form>
        </div>
    </div>
    </div>
</div>
@stop