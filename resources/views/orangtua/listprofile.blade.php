@extends('layouts.frontend.app')

@section('title','Dashboard')
@section('content')
<div class="col s12">
    <div class="row" style="">
        <div class=" col s12" style="
              background-color:white;
              padding:15px;
              border-radius:10px;
              margin-top: -60px;
              box-shadow:5px 5px 5px grey;
              text-align: center;
              ">
              <h5>{{$a->nama}}</h5>
              <label>BPK. {{strtoupper($a->nama_ayah)}}</label>
              
      </div>
    </div>
</div>
<div class="row">
<a href="/orangtua/profilesiswa/{{$a->id_siswa}}">
  <div class="col s2"></div>
  <div class="col s8"style="">
    <div class="row" style="">
        <div class=" col s12" style="
              background-color:white;
              padding:15px;
              border-radius:10px;
              margin-top:;
              box-shadow:5px 5px 5px grey;
              text-align: center;
              ">
              <h5>{{$a->nama}}</h5>
              <label>Murid</label>  
      </div>
    </div>
</div>
<div class="col s2"></div>
</a>
</div>

<div class="row">
<a href="/orangtua/profileorangtua">
<div class="col s2"></div>
<div class="col s8">
    <div class="row" style="">
        <div class=" col s12" style="
              background-color:white;
              padding:15px;
              border-radius:10px;
              margin-top:;
              box-shadow:5px 5px 5px grey;
              text-align: center;
              ">
              <h5>{{ucwords(Auth::user()->nama_lengkap)}}</h5>
              <label>OrangTua Murid</label>
      </div>
    </div>
</div>
<div class="col s2"></div>
</a>
</div>


        
@endsection