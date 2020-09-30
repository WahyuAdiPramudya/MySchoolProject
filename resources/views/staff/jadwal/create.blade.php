@extends('layouts.backend.app')

@section('title','Tambah Berita')

@section('content')
<div class="main-content-wrap sidenav-open d-flex flex-column">
    <div class="main-content">
        <div class="card">
            <div class="card-header bg-transparent">
                <h3 class="card-title">Tambah Berita</h3>
            </div>
            <!--begin::form-->
                <div class="card-body">
            <form action="{{ route ('staff.jadwal.store')  }}" method="post" enctype="multipart/form-data">
                     {{ csrf_field() }} 
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nama_jadwal" class="ul-form__label">Nama Jadwal:</label>
                            <input type="text" autocomplete="off" name="nama_jadwal" class="form-control" id="nama_jadwal" placeholder="Masukan Nama Jadwal">

                        </div>
                        <div class="form-group col-md-6">
                            <label for="deskripsi" class="ul-form__label">Kelas:</label>
                            <select class="form-control" name="id_kelas">
                                <option value="">Pilih Kelas</option>
                                @foreach($kelas as $row)
                                    <option value="{{$row->id_kelas}}">{{$row->nama_kelas}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row">
                    <div class="form-group col-md-6">
                            <label for="file_jadwal" class="ul-form__label">File:</label>
                                <input type="file" class="form-control" id="file_jadwal"  name="file_jadwal" placeholder="Masukan Gambar">
                        </div>
                    </div>
                     <div class="col-lg-12">
                                    <button type="submit" class="btn btn-primary m-1">Save</button>
                                    <a href="{{ route('staff.berita.index') }}" class="btn btn-outline-secondary m-1">Cancel</a>
                                </div>
                </form>

                <!-- end::form -->
            </div>
        </div>
    </div>
    @endsection