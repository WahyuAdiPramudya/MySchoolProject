@extends('layouts.backend.app')

@section('title','Tambah Siswa')

@section('content')
<div class="main-content-wrap sidenav-open d-flex flex-column">
    <div class="main-content">
        <div class="card">
            <div class="card-header bg-transparent">
                <h3 class="card-title">Tambah Siswa</h3>
            </div>
            <!--begin::form-->
                <div class="card-body">
            <form action="{{ route ('staff.siswa.store')  }}" method="post" enctype="multipart/form-data">
                     {{ csrf_field() }} 
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nisn" class="ul-form__label">Nisn:</label>
                            <input type="number" autocomplete="off" required="" name="nisn" class="form-control" id="nisn" placeholder="Masukan Judul">

                        </div>
                        <div class="form-group col-md-6">
                            <label for="nama" class="ul-form__label">Nama Lengkap:</label>
                            <input type="text" autocomplete="off" id="nama" required="" class="form-control" name="nama" placeholder="Masukan Deskripsi">

                        </div>
                    </div>
                     <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="Jenkel" class="ul-form__label">Jenkel:</label>
                            <select class="form-control" name="jenkel" required="">
                                    <option >-- Pilih Agama --</option>
                                    <option value="laki-laki">Laki-Laki</option>
                                    <option value="perempuan">Perempuan</option>
                              </select>      
                        </div>
                        <div class="form-group col-md-6">
                            <label for="nisn" class="ul-form__label">Agama:</label>
                            <select class="form-control" name="agama" required="">
                                    <option >-- Pilih Agama --</option>
                                    <option value="islam">Islam</option>
                                    <option value="kristen">Kristen</option>
                                    <option value="protestan">Protestan</option>
                                    <option value="hindu">Hindu</option>
                                    <option value="budha">Budha</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="Jenkel" class="ul-form__label">Kelas:</label>
                            <select class="form-control" name="kelas_id">
                                    <option >-- Pilih Kelas --</option>
                                    @foreach($kelas as $row)
                                    <option value="{{ $row->id }}">{{ $row->nama_kelas }}</option>
                                   @endforeach
                              </select>      
                        </div>
                        <div class="form-group col-md-6">
                            <label for="nisn" class="ul-form__label">Nama Ayah:</label>
                            <input type="text" name="nama_ayah" class="form-control" autocomplete="off" placeholder="Masukan Nama Ayah" required=""> 
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nama_ibu" class="ul-form__label">Nama Ibu:</label>
                            <input type="text" autocomplete="off" required="" name="nama_ibu" class="form-control" id="nama_ibu" placeholder="Masukan Ibu">

                        </div>
                        <div class="form-group col-md-6">
                            <label for="no_telp_wali" class="ul-form__label">No Telp Wali:</label>
                            <input type="number" autocomplete="off" required="" name="no_telp_wali" class="form-control" id="no_telp_wali" placeholder="Masukan Ibu">

                        </div>
                    </div>
                    <div class="form-row">
                    <div class="form-group col-md-6">
                            <label for="nama" class="ul-form__label">Tanggal Lahir:</label>
                            <input type="date" autocomplete="off" id="tanggal_lahir" required="" class="form-control" name="tanggal_lahir" placeholder="Masukan Tanggal Lahir">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="alamat" class="ul-form__label">alamat:</label>
                            <input type="text" autocomplete="off" required="" name="alamat" class="form-control" id="alamat" placeholder="Masukan Alamat Siswa">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="image_siswa" class="ul-form__label">Foto Siswa:</label>
                            <input type="file" autocomplete="off" id="image_siswa" required="" class="form-control" name="image_siswa" placeholder="Masukan Deskripsi">

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