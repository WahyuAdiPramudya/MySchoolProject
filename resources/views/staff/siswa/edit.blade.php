@extends('layouts.backend.app')

@section('title','Edit Siswa')

@section('content')
<div class="main-content-wrap sidenav-open d-flex flex-column">
    <div class="main-content">
        <div class="card">
            <div class="card-header bg-transparent">
                <h3 class="card-title">Edit Siswa</h3>
            </div>
            <!--begin::form-->
                <div class="card-body">
            <form action="{{ route ('staff.siswa.update',$siswa->nisn)  }}" method="post" enctype="multipart/form-data">
                     {{ csrf_field() }} 
                     {{ method_field('put') }}
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nisn" class="ul-form__label">Nisn:</label>
                            <input type="number" autocomplete="off" value="{{ $siswa->nisn }}" required="" name="nisn" class="form-control" id="nisn" placeholder="Masukan Judul">

                        </div>
                        <div class="form-group col-md-6">
                            <label for="nama" class="ul-form__label">Nama Lengkap:</label>
                            <input type="text" autocomplete="off" id="nama" value="{{ $siswa->nama }}" required="" class="form-control" name="nama" placeholder="Masukan Deskripsi">

                        </div>
                    </div>
                     <div class="form-row">
                        <div class="form-group col-md-6">

                            <label for="Jenkel" class="ul-form__label">Jenkel:</label>
                            <select class="form-control" name="jenkel" required="" >
                                    <option >-- Pilih Agama --</option>
                                    <option value="laki-laki" <?php if($siswa->jenkel =='laki-laki') { echo 'selected';}?>>Laki-Laki</option>
                                    <option value="perempuan" <?php if($siswa->jenkel =='perempuan') { echo 'selected';}?>>Perempuan</option>
                              </select>      
                        </div>
                        <div class="form-group col-md-6">
                            <label for="nisn" class="ul-form__label">Agama:</label>
                            <select class="form-control" name="agama" required="">
                                    <option >-- Pilih Agama --</option>
                                    <option value="islam" <?php if($siswa->agama =='islam') { echo 'selected';}?>>
                                    Islam
                                </option>
                                    <option value="kristen" <?php if($siswa->agama =='kristen') { echo 'selected';}?>>
                                    Kristen
                                </option>
                                    <option value="protestan" <?php if($siswa->agama =='protestan') { echo 'selected';}?>>
                                    Protestan
                                </option>
                                    <option value="hindu" <?php if($siswa->agama =='hindu') { echo 'selected';}?>>
                                    Hindu
                                </option>
                                    <option value="budha" <?php if($siswa->agama =='budha') { echo 'selected';}?>>
                                    Budha
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="Jenkel" class="ul-form__label">Kelas:</label>
                            <select class="form-control" name="kelas_id">
                                    <option >-- Pilih Kelas --</option>
                                    @foreach($kelas as $row)
                                    <option value="{{ $row->id }}" <?php if($siswa->kelas_id == $row->id) { echo 'selected'; } ?>>{{ $row->nama_kelas }}</option>
                                   @endforeach
                              </select>      
                        </div>
                        <div class="form-group col-md-6">
                            <label for="nisn" class="ul-form__label">Nama Ayah:</label>
                            <input type="text" name="nama_ayah" value="{{ $siswa->nama_ayah}}" class="form-control" autocomplete="off" placeholder="Masukan Nama Ayah" required=""> 
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nama_ibu" class="ul-form__label">Nama Ibu:</label>
                            <input type="text" autocomplete="off" value="{{ $siswa->nama_ibu}}" required="" name="nama_ibu" class="form-control" id="nama_ibu" placeholder="Masukan Ibu">
                        </div>
                         <div class="form-group col-md-6">
                            <label for="no_telp_wali" class="ul-form__label">No Telp Wali:</label>
                            <input type="number" autocomplete="off" required="" name="no_telp_wali" class="form-control" id="no_telp_wali" placeholder="Masukan No Telpon Wali">

                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nama" class="ul-form__label">Tanggal Lahir:</label>
                            <input type="date" autocomplete="off" value="{{ $siswa->tanggal_lahir }}" id="tanggal_lahir" required="" class="form-control" name="tanggal_lahir" placeholder="Masukan Tanggal Lahir">

                        </div>
                        <div class="form-group col-md-6">
                            <label for="alamat" class="ul-form__label">alamat:</label>
                            <input type="text" autocomplete="off" value="{{ $siswa->alamat}}" required="" name="alamat" class="form-control" id="alamat" placeholder="Masukan Alamat Siswa">

                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="image_siswa" class="ul-form__label">Foto Siswa:</label>
                            <input type="file" autocomplete="off" id="image_siswa" class="form-control" name="image_siswa" placeholder="Masukan Deskripsi">

                        </div>
                    </div>
                     <div class="col-lg-12">
                                    <button type="submit" class="btn btn-primary m-1 ladda-button basic-ladda-button">Save</button>
                                    <a href="{{ route('staff.siswa.index') }}" class="btn btn-outline-secondary m-1 ladda-button basic-ladda-button">Cancel</a>
                                </div>
                </form>

                <!-- end::form -->
            </div>
        </div>
    </div>
    @endsection