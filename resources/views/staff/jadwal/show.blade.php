@extends('layouts.backend.app')

@section('title','Tambah Berita')

@section('content')
<div class="main-content-wrap sidenav-open d-flex flex-column">
    <div class="main-content">
        <div class="card">
            <div class="card-header bg-transparent">
                <h3 class="card-title">{{$jadwal->nama_jadwal}}</h3>
            </div>
            <!--begin::form-->
            <div class="row">
                <div class="col s8">
                <div class="card-body">
                    <embed type="application/pdf" src="/File/{{$jadwal->file_jadwal}}" width="900" height="900">
                    </embed>
                </div>
            </div>
                <div class="col s4">
                <div class="card-body">
                    <a href="{{route('staff.download',$jadwal->id_jadwal)}}" class="btn btn-success"> Download</a>
                </div>
                </div>
            </div>
            
            <!-- end::form -->
        </div>
    </div>
</div>
    @endsection