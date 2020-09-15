@extends('layouts.frontend.app')

@section('title','Dashboard')

@section('content')
<div class="card">
	<table>
        <thead>
          <tr>
              <th>Name</th>
              <th>Tugas</th>
              <th>Nilai</th>
          </tr>
        </thead>

        <tbody>
        	@foreach($data as $nilai)
          <tr>
            <td>{{$nilai->getSiswa['nama']}}</td>
            <td>{{$nilai->nama_tugas}}</td>
            <td>{{$nilai->nilai}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
</div>
@endsection