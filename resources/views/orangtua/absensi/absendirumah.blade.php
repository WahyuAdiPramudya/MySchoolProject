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
<h5></h5>
<div class="row" style="padding:10px;text-align:center; ">
	<div class=" card col s12" style=" padding:30px; border-radius: 10px;">
		<div class="row">
	<form action="/orangtua/postAbsen" method="POST">
		{{ csrf_field() }}
		@foreach($data as $siswa)
    <div class="row">
    <div class="col s8">
      <label>Tanggal</label>
      <div class="card">
        <label style="font-size: 12px;  color:black;"> {{ date('l, d F Y') }}</label>
    </div>
    </div>
    <div class="col s4">
      <label>Jam</label>
      <div class="card">
        <label >
          <div class="jam-digital-malasngoding ml-4">
                                <label id="jam"style="font-size: 12px;  color:black;"></label>
                                <b>:</b>
                                <label id="menit" style="font-size: 12px;  color:black;"></label>
                                <b>:</b>
                                <label id="detik" style="font-size: 12px;  color:black;"></label>
                            </div>
        </label>
    </div>
    </div>
    </div>
		<div class="row" id="{{$siswa->id_siswa}}">
			<div class="col s6">
				<input type="text" value="{{$siswa->nama}}" readonly>
				<input type="hidden" value="{{$siswa->id_siswa}}" name="id_siswa">
				<input type="hidden" value="{{$siswa->id_kelas}}" name="id_kelas">
				<input type="hidden" value="{{date('Y-m-d')}}" name="tanggal_masuk"/>
			</div>
			<div class="col s6">
				<p>
     				<label>
        				<input type="checkbox" id="{{$siswa->id_siswa}}" value="hadir" name="status"/>
       					<span>Hadir</span>
      				</label>
    			</p>
			</div>
		</div>
		@endforeach
		<button type="submit" class="btn btn-success">Kirim Absensi</button>
	</form>
</ul>
@endsection


@push('js')
 <script>
        window.setTimeout("waktu()", 1000);

function waktu() {
    var waktu = new Date();
    setTimeout("waktu()", 1000);
    document.getElementById("jam").innerHTML = waktu.getHours();
    document.getElementById("menit").innerHTML = waktu.getMinutes();
    document.getElementById("detik").innerHTML = waktu.getSeconds();
}
        </script>

@endpush