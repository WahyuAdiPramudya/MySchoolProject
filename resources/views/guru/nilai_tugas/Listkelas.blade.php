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

<div class="cols 12" style="margin-top: 50px;">
<div class="row">
  <div class="col s12">
@foreach($data as $kelas)
        <div class="row" style="text-align:center; ">
            <div class="col s3 icon">
                <div class="card" style=" margin-top:5px; border-radius: 5px;">
                    <div style="padding:25%; margin:8px;   ">
                    	<a href="/guru/DataNilaiSiswa/{{$kelas->id_kelas}}">
                    		 <small>{{$kelas->nama_kelas}}</small>
                    	</a>
                    	
                    </div>
                 </div>
            </div>
@endforeach
	    </div>
  </div>
</div>
</div>
</div>
@endsection

