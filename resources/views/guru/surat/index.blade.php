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
                                <img src="{{asset('assets/frontend/image/sakit.png')}}" alt="" class="responsive-img gambar">
                                <label class="label" for="">Sakit</label>
                          </div>
                          <div class="col s4">
                               <img src="{{asset('assets/frontend/image/izin.png')}}" alt="" class="responsive-img gambar"> 
                               <label class="label" for="">Izin</label>
                          </div>
                          <div class="col s4">
                                <img src="{{asset('assets/frontend/image/tugas.png')}}" alt="" class="responsive-img gambar">
                                <label class="label" for="">Jumlah </label>
                          </div>
                </div>
                <div class="col s1">
              </div>
              </div>
            </div>
        
            <h6>Informasi Nilai</h6>

            @foreach($data as $a)
            <a href="/guru/detail_surat/{{$a->id_surat}}" style="color:black;">
        <div class="col s12" >
              <div class="row" style="">
                <div class="caps col s12" style=" padding:10px;">
                          <div class="col s2">
                            @if($a->izin == 1)
                                <img src="{{asset('assets/frontend/image/izin data.png')}}" alt="" class="responsive-img gambar">
                            @elseif($a->sakit == 1)
                                 <img src="{{asset('assets/frontend/image/sakitdata.png')}}" alt="" class="responsive-img gambar">
                            @endif
                          </div>
                          <div class="col s6">
                            @if($a->izin == 1)
                               <h6>SURAT IZIN</h6>
                            @elseif($a->sakit == 1)
                              <h6>SURAT SAKIT</h6>
                            @endif
                               <label for="">oleh : {{$a->siswa['nama']}}</label>
                          </div>
                          <div class="col s4" >
                            <label style="font-size:24px; color:Black;"></label>
                                <img src="{{asset('assets/frontend/image/avatar.png')}}" alt="" class="responsive-img gambar" style="margin-top:10px;">
                                
                          </div>
                </div>
              </div>
            </div>
          </a>
            @endforeach

@endsection