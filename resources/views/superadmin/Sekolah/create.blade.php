@extends('layouts.backend.app')

@section('title','Tambah Mitra Sekolah')

@section('content')
<div class="main-content-wrap sidenav-open d-flex flex-column">
    <div class="main-content">
        <div class="card">
            <div class="card-header bg-transparent">
                <h3 class="card-title">Tambah Sekolah</h3>
            </div>
            <!--begin::form-->
                <div class="card-body">
            <form action="{{ route ('SuperAdmin.Sekolah.store')  }}" method="post" enctype="multipart/form-data">
                     {{ csrf_field() }} 
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="Nis" class="ul-form__label">Nis:</label>
                            <input type="number" autocomplete="off" name="nis" class="form-control" id="Nis" placeholder="Masukan Nis">

                        </div>
                        <div class="form-group col-md-6">
                            <label for="deskripsi" class="ul-form__label">Nama Sekolah:</label>
                            <input type="text" autocomplete="off" id="nama_sekolah" class="form-control" name="nama_sekolah" placeholder="Masukan Deskripsi">

                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="kepala_sekolah" class="ul-form__label">Kepala Sekolah:</label>
                            <div class="input-right-icon">
                                <input type="text" class="form-control" id="kepala_sekolah" name="kepala_sekolah" placeholder="Masukan Nama Kepala Sekolah ">

                            </div>
                        </div>
                          <div class="form-group col-md-6">
                            <label for="image" class="ul-form__label">No Telp:</label>
                                <input type="number" class="form-control" id="no_telp"  name="no_telp" placeholder="Masukan Nomor Telepon Sekolah">
                        </div>
                    </div>
                     <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="alamat_sekolah" class="ul-form__label">Alamat Sekolah:</label>
                            <div class="input-right-icon">
                                <input type="text" class="form-control" id="alamat_sekolah" name="alamat_sekolah" placeholder="Masukan Alamat Sekolah ">

                            </div>
                        </div>
                          <div class="form-group col-md-6">
                            <label for="image" class="ul-form__label">Logo:</label>
                                <input type="file" class="form-control" id="logo"  name="logo" placeholder="Masukan Logo Sekolah">
                        </div>
                    </div>
                     <div class="col-lg-12">
                                    <button type="submit" class="btn btn-primary m-1">Save</button>
                                    <a href="{{ route('SuperAdmin.Sekolah.index') }}" class="btn btn-outline-secondary m-1">Cancel</a>
                                </div>
                </form>

                <!-- end::form -->
            </div>
        </div>
    </div>
    @endsection