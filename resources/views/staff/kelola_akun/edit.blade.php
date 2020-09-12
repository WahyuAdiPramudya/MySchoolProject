@extends('layouts.backend.app')

@section('title','Setting Akun')

@section('content')
<div class="main-content-wrap sidenav-open d-flex flex-column">
    <div class="main-content">

    
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Setting</h5>
            </div>
            <div class="modal-body">
                <form action="{{ route('staff.kelola_akun.update',$kelola_akun->id) }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('put') }}
                    <div class="row">
                        <div class="col-md-12 form-group mb-3">
                            <label>Status</label>
                            <select name="status" class="form-control">
                                    <option > -- Pilih Status -- </option>
                                <option value="disable" <?php if($kelola_akun->status =='disable') { echo 'selected';}?>>
                                 Disable
                             </option>
                                    <option value="enable" <?php if($kelola_akun->status =='enable') { echo 'selected';}?>> 
                                    Enable 
                            </option>
                            </select>
                        </div>
            </div>
            <div class="modal-footer">
                <a href="{{ route('staff.kelola_akun.index') }}" class="btn btn-secondary" data-dismiss="modal">Batal</a>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
    </div>
</div>
@stop