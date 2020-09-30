@extends('layouts.frontend.app')

@section('title','Dashboard')
@section('content')
<div class="col s12 ">
              <div class="row" style="">
              <div class="col s1">
              	<!---Grid-->
              </div>
              
                <div class="col s10" 
                style="
                background-color:white;
                height:60%;
                padding:20px;
                border-radius:10px;
                margin-top: -100px;
                text-align: center;
                ">
                @if($data->izin == 1)
                    <h5 style="text-align:center;">Detail Izin</h5>
                @else
                  <h5 style="text-align:center;">Detail Sakit</h5>
                @endif
              <label>Nama Siswa</label>
              :
              <label>{{$data->siswa['nama']}}</label><br>

               <label>Nama Orangtua</label>:
               @foreach($user as $parent)
               @if($data->siswa['no_telp_wali'] == $parent->no_telp)
              <label>{{$parent->nama_lengkap}}</label>
              @endif
              @endforeach
              <h6>Jangka Waktu Izin</h6>
              <h6>{{$data->dari_tanggal}}-{{$data->sampai_tanggal}}</h6>

              <h6>Keterangan</h6>
              <label>{{$data->keterangan}}</label>

              <h6>Lampiran</h6>
              <hr>
              @if($data->foto == NULL)
              <h5>Tidak Ada Lampiran</h5>
              @else
              <img src="/Surat/{{$data->foto}}">
              @endif


              </div>
              <div class="col s1"></div>
            </div>
          </div>

@endsection