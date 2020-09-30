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
                         <label>Cari Info</label>
                </div>
                <div class="col s1">
              </div>
              </div>
</div>
 <div class="row">
    <div class="col s12 ">
      <div class="card">
        <div class="card-image">
          <img src="/images/{{$berita->image}}" class="responsive-img">
        </div>
        <div class="card-content">
          <h4>{{$berita->judul}}</h4>
          <p>{{$berita->desc}}</p>
        </div>
      </div>
    </div>
  </div>

@endsection
