@extends('layouts.frontend.app')

@section('title','Dashboard')

@section('content')


<form>

<div class="col s12">
    <div class="row" style="">
        <div class=" col s12" style="
              background-color:white;
              padding:15px;
              border-radius:10px;
              margin-top: -50px;
              box-shadow:5px 5px 5px grey;">
              <label>Cari Info</label>
      </div>
    </div>
</div>
</form>

@foreach($data as $info)
    <div class="col s12 berita" style="
      height: 50%;

    ">
    <div class="card horizontal" style="border-radius:10px 10px 10px 10px;">
      <div class="card-image">
        <img src="/assets/image/futsal.jpg" class="responsive-img">
      </div>
      <div class="card-stacked">
        <div class="card-content">
          <h5>{{$info->judul}}</h5>
          @php
              $potong = substr($info->desc, 0, 40 )
          @endphp
          <p>{{$potong}}</p>
        </div>
        <div class="card-action">
          <a href="/orangtua/berita/{{$info->id_berita}}">lanjutkan</a>
        </div>
      </div>
    </div>
  </div>
  @endforeach

@endsection
