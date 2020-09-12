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
            <form action="{{ route ('staff.berita.store')  }}" method="post" enctype="multipart/form-data">
                     {{ csrf_field() }} 
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="judul" class="ul-form__label">Judul:</label>
                            <input type="text" autocomplete="off" name="judul" class="form-control" id="judul" placeholder="Masukan Judul">

                        </div>
                        <div class="form-group col-md-6">
                            <label for="deskripsi" class="ul-form__label">Deskripsi:</label>
                            <input type="text" autocomplete="off" id="desc" class="form-control" name="desc" placeholder="Masukan Deskripsi">

                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="tanggal_upload" class="ul-form__label">Tanggal Upload:</label>
                            <div class="input-right-icon">
                                <input type="date" class="form-control" id="tanggal_upload" name="tanggal_upload" placeholder="Masukan Tanggal ">

                            </div>
                        </div>
                          <div class="form-group col-md-6">
                            <label for="image" class="ul-form__label">Gambar:</label>
                                <input type="file" class="form-control" id="image"  name="image" placeholder="Masukan Gambar">
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