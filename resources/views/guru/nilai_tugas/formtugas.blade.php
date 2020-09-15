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

<div class="row" style="padding:10px;">
	<div class=" card col s12" style=" padding:30px;">
		<div class="row">
			<form action="{{route('gurupostNilai')}}" method="POST">
			{{ csrf_field() }}

			@foreach($siswa as $siswa)
			<div class="col s6">
				<input type="hidden" value="{{$siswa->id_siswa}}" name="id_siswa[]">
				<input type="hidden" value="{{$siswa->kelas_id}}" name="id_kelas[]">
					<input type="text" value="{{$siswa->nama}}" readonly>
			</div>
			<div class="col s6">
				<input type="text" placeholder="Masukan Nilai" name="nilai[]">
			</div>

			@endforeach
			<div class="row">
				<div class="input-field col s12">
				<select name="id_mapel" >
				<option value=" " selected>Pilih Mata Pelajaran</option>
					@foreach($mapel as $mapel)
						<option value="{{$mapel->id_mapel}}">{{$mapel->mapel}}</option>
					@endforeach
				</select>
			</div>
			<div class="input-field col s12">
				<input type="text" placeholder="Masukan Nama Tugas" name="nama_tugas"></td>
			</div>
			</div>
				<button type="submit" class="btn btn-success">Kirim Nilai</button></td>

		</form>
		</div>
			
	</div>
</div>

@endsection