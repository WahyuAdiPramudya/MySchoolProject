<ul>
	<form action="{{route('gurupostNilai')}}" method="POST">
		{{ csrf_field() }}
		<table>
			@foreach($siswa as $siswa)
			<input type="hidden" value="{{$siswa->id_siswa}}" name="id_siswa[]">
			<tr>
				<td>
					<input type="text" value="{{$siswa->nama}}" readonly>
					<input type="text" placeholder="Masukan Nilai" name="nilai[]">
				</td>
			</tr>
			@endforeach
			<tr>
				<td>
					<select name="id_mapel">
						<option value=" " selected>Pilih Mata Pelajaran</option>
						@foreach($mapel as $mapel)
						<option value="{{$mapel->id_mapel}}">{{$mapel->mapel}}</option>
						@endforeach
					</select>
				</td>
			</tr>
			<tr>
				<td><input type="text" placeholder="Masukan Nama Tugas" name="nama_tugas"></td>
			</tr>
			<tr>
				<td><button type="submit">Kirim Nilai</button></td>
			</tr>
		</table>
	</form>
</ul>