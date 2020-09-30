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
 <div class="row">
    <div class="col s12 ">
      <div class="card">
        <div class="card-image" style="padding: 10px;">
          <img src="/images/{{$row->image}}" class="responsive-img">
        </div>
        <div class="card-content">
          <h4>{{$row->title}}</h4>
          <p>{{$row->description}}</p>
        </div>
      </div>
    </div>
  </div>

@endsection
