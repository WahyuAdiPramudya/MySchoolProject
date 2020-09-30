@extends('layouts.frontend.app')

@section('title','Dashboard')
@section('content')

<div class="col s12">
              <div class="row" style="">
              <div class="col s1">
              </div>
                <div class=" col s12" style="
                background-color:white;
                height:60%;
                padding:20px;
                border-radius:10px;
                margin-top: -50px;
                text-align:center;
                box-shadow:10px 10px 5px grey;">
                          <div class="col s4">
                                <img src="{{asset('assets/frontend/image/tugas.png')}}" alt="" class="responsive-img gambar">
                                <label class="label" for="">Selesai</label>
                          </div>
                          <div class="col s4">
                               <img src="{{asset('assets/frontend/image/tidak tugas.png')}}" alt="" class="responsive-img gambar"> 
                               <label class="label" for="">Belum selesai</label>
                          </div>
                          <div class="col s4">
                                <img src="{{asset('assets/frontend/image/tugas.png')}}" alt="" class="responsive-img gambar">
                                <label class="label" for="">Rata-rata Nilai</label>
                          </div>
                </div>
                <div class="col s1">
              </div>
              </div>
            </div>
        
            <h6>Informasi Nilai</h6>

            @foreach($data as $a)
        <div class="col s12" >
              <div class="row" style="">
                <div class="caps col s12" style=" padding:10px;">
                          <div class="col s2">
                                <img src="{{asset('assets/frontend/image/tugas.png')}}" alt="" class="responsive-img gambar">
                          </div>
                          <div class="col s6">
                               <h6>{{$a->nama_tugas}}</h6>
                               <label for="">Bpk Marno.S.kom</label>
                          </div>
                          <div class="col s4" >
                            <label style="font-size:24px; color:Black;">{{$a->nilai}}</label>
                                <img src="{{asset('assets/frontend/image/bintang.png')}}" alt="" class="responsive-img gambar" style="margin-top:10px;">
                                
                          </div>
                </div>
              </div>
            </div>
            @endforeach

@endsection