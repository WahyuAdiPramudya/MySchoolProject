@extends('layouts.frontend.app')

@section('title','Dashboard')

@section('content')
<div class="col s12">
    <div class="row" style="">
        <div class=" col s12" style="
              background-color:white;
              padding:15px;
              border-radius:10px;
              margin-top: -50px;
              box-shadow:5px 5px 5px grey;
              ">
              <label>Cari Info</label>
              
      </div>
    </div>
</div>
<h5>{{$kelas->nama_kelas}}</h5>
<div class="row" style="padding:10px;text-align:center; ">
	<label style="font-size: 20px;  color:black;"> {{ date('l, d F Y') }}</label>
	<div class=" card col s12" style=" padding:30px; border-radius: 10px;">
		<div class="row">
	<form action="{{route('guruabsensi')}}" method="POST">
		{{ csrf_field() }}
		@foreach($siswa as $siswa)
		<div class="row" id="{{$siswa->id_siswa}}">
			<div class="col s6">
				<input type="text" value="{{$siswa->nama}}" readonly>
				<input type="hidden" value="{{$siswa->id_siswa}}" name="id_siswa[]">
				<input type="hidden" value="{{$siswa->id_kelas}}" name="id_kelas">
				<input type="hidden" value="{{date('Y-m-d')}}" name="tanggal_masuk"/>
			</div>
			<div class="col s6">
				<p>
     				<label>
        				<input type="checkbox" id="{{$siswa->id_siswa}}" value="hadir" name="status[]"/>
       					<span>Hadir</span>
      				</label>
    			</p>
    			<p>
     				<label>
        				<input type="checkbox" id="{{$siswa->id_siswa}}" value="sakit" name="status[]"/>
       					<span>Sakit</span>
      				</label>
    			</p>
    			<p>
     				<label>
        				<input type="checkbox" id="{{$siswa->id_siswa}}" value="izin" name="status[]"/>
       					<span>Izin</span>
      				</label>
      			</p>
      			<p>
     				<label>
        				<input type="checkbox" id="{{$siswa->id_siswa}}" value="alpa" name="status[]"/>
       					<span>Alpa</span>
      				</label>
    			</p>
			</div>
		</div>
		@endforeach
		<button type="submit" class="btn btn-success">Kirim Absensi</button>
	</form>
</ul>
@endsection