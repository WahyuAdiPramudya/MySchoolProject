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
    <div class="card horizontal" style="border-radius:10px 10px 10px 10px;
      
">
    <a href="/orangtua/update/{{$info->id_update}}">
      <div class="card-image">
        <img src="/images/{{$info->image}}" class="responsive-img image">
      </div>
      <div class="card-stacked">
        <div class="card-content" style="color: black;">
          <h5>{{$info->title}}</h5>
          @php
              $potong = substr($info->description, 0, 40 )
          @endphp
          <p>{{$potong}}</p>
        </div>
        <div class="card-action">
        </div>
      </a>
      </div>
    </div>
  </div>
  @endforeach

@endsection
