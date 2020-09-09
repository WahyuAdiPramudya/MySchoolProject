<ul>
	<form action="{{route('guruabsensi')}}" method="POST">
		{{ csrf_field() }}
		@foreach($siswa as $siswa)
		<li>
			<input type="text" value="{{$siswa->nama}}" readonly>
			<input type="hidden" value="{{$siswa->id_siswa}}" name="id_siswa[]">
			<input type="hidden" value="{{$siswa->id_kelas}}" name="id_kelas">
			<input type="hidden" value="{{date('Y-m-d')}}" name="tanggal_masuk"/>
			<input type="checkbox" value="hadir" name="status[]">Hadir
			<input type="checkbox" value="sakit" name="status[]">Sakit
			<input type="checkbox" value="izin" name="status[]">Izin
			<input type="checkbox" value="alfa" name="status[]">Alfa
		</li>
		@endforeach
		<br>
		<button type="submit">Kirim Absensi</button>
	</form>
</ul>