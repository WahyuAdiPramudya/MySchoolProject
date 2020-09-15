<select class="selectpicker kelas" data-width="fit" name="kelas">
	<option value="X">X</option>
	<option value="XI">XI</option>
	<option value="XII">XII</option>
</select>
<button class="btn btn-success button-search" type="button"><i class="fas fa-search"> Cari dan Tampilkan</i></button>
@foreach($kelas as $kelas)
<div class="col s3">
	<div class="card" style=" margin-top:5px;">
		<div class="kelassiswa" style="margin:8px;">
			<a href="{{route('gurugetSiswaAbsen',$kelas->id_kelas)}}">{{$kelas->nama_kelas}}</a>
		</div>
	</div>
</div>
@endforeach
<pre></pre>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<!-- <script>
	$('.button-search').on('click',function(){
		$id = $('.kelas').val();
		$.ajax({
			type: 	'get',
			url: 	'{{route("gurusearch")}}',
			data: 	{'nama_kelas':$id},
			success:function(data){
				$('.kelassiswa').html(data);
			}
		})
	})
</script> -->
