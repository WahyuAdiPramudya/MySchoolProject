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
 <table>
        <thead>
          <tr>
              <th>No</th>
              <th>NISN</th>
              <th>Nama Siswa</th>
              <th></th>
          </tr>
        </thead>

        <tbody>
          @foreach($data as $row)
          <tr>
            <td>1</td>
            <td>{{$row->nisn}}</td>
            <td>{{$row->nama}}</td>
            <td>
              <a href="/guru/detailsiswa/{{$row->id_siswa}}"><span style="font-size: 10px;">Detail</span><i class=" small material-icons">chevron_right</i></a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
</div>
</div>
</div>
@endsection

