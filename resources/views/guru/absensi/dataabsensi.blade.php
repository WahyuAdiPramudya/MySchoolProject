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
              <h5>{{$kelas->nama_kelas}}</h5>
              @foreach($sekolah as $s)
                @if($s->id_sekolah == $kelas->sekolah_id)
                <label>{{strtoupper($s->nama_sekolah)}}</label>
                @endif
              @endforeach
      </div>
    </div>
</div>
  <label style="font-size: 20px;  color:black;"> {{ date('l, d F Y') }}</label>
<div class="card" style="padding:5px; border-radius: 5px;">
	<table>
        <thead>
          <tr>
              <th>Name</th>
              <th>Kelas</th>
              <th>Status</th>
          </tr>
        </thead>

        <tbody>
        	@foreach($data as $row)
            @if($row->id_kelas == $kelas->id_kelas)
          <tr>
            <td>{{$row->getSiswa['nama']}}</td>
            <td>{{$row->getKelas['nama_kelas']}}</td>
            <td >@if($row->status == 'hadir')
                 <span class=" badge blue" style="color: white;">{{$row->status}}</span>
                @elseif($row->status == 'izin' )
                  <span class=" badge " style="color: white;" >{{$row->status}}</span>
                @elseif($row->status == 'sakit' )
                 <span class=" badge yellow " style="color: white;">{{$row->status}}</span>
                @else
                 <span class=" badge red " style="color: white;">{{$row->status}}</span>
                @endif
            </td>
          </tr>
          @endif
          @endforeach
        </tbody>
      </table>
</div>
@endsection