@extends('layouts.backend.app')

@push('css')

@endpush
@section('title','View detail Siswa')
@section('content')
<div class="main-content-wrap sidenav-open d-flex flex-column">
                <div class="main-content">
           
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card mb-12">
                                <div class="card-body">
                                    <div class="card-title m-0" style="text-align: center;">Biodata Siswa {{ $siswa->nama }}</div>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 mb-12">
                                            <div class="p-4 border border-light rounded d-flex align-items-center">
                                                <div>
                                              
                                                  <h4 class="text-18 mb-1 text-black">Nisn		 	: {{ $siswa->nisn }}</h4>
                                                    <br>
                                                  <h4 class="text-18 mb-1 text-black">Nama Lengkap 	: {{ $siswa->nama }}</h4>
                                                    <br>
                                           		  <h4 class="text-18 mb-1 text-black">Jenis Kelamin	: {{ $siswa->jenkel }}</h4>
                                                    <br>
                                                  <h4 class="text-18 mb-1 text-black">Kelas	: {{ $siswa->kelas->nama_kelas ?? '' }}</h4>
                                                  <br>
                                                  <h4 class="text-18 mb-1 text-black">Nama Ayah 	: {{ $siswa->nama_ayah }}</h4>
                                                  	<br>
                                               	  <h4 class="text-18 mb-1 text-black">Nama Ibu	 	: {{ $siswa->nama_ibu }}</h4>   <br>
                                                  <h4 class="text-18 mb-1 text-black">Tanggal Lahir : {{ $siswa->tanggal_lahir->toFormattedDateString()}}</h4>
                                                  <br>
                                                  <h4 class="text-18 mb-1 text-black">Alamat          : {{ $siswa->alamat }}</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="row">

                        <div class="col-md-12 col-sm-12">
                            <div class="card bg-dark text-white o-hidden mb-4">
                                <img class="card-img" src="{{ asset('siswa/'.$siswa->image_siswa) }}" alt="Card image">
                                <div class="card-img-overlay">
                                </div>
                            </div>
                        </div>
                </div>
            </div>
@endsection

@push('js')

@endpush