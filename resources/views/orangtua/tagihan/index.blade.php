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
              <label>Cari tagihan</label>
      </div>
    </div>
</div>
</form>

@foreach($data as $a)
     <div class="col s12" >
              <div class="row">
                <div class="caps col s12" style="float: left">
                          <div class="col s8">
                               <h6>{{$a->title}}</h6>
                               <label for="">{{$a->descript}}</label><br>
                            <label style="font-size:24px; color:Black;">{{$a->jumlah_bayar}}</label>
                          </div>
                          <div class="col s4" >
                            @if($a->status == 'Lunas')
                          <img src="{{asset('assets/frontend/image/lunas.png')}}" alt="" class="responsive-img gambar" style="margin-top:10px;">
                          <h6>{{$a->status}}</h6>
                          @elseif($a->status == 'Belum Lunas')
                            <img src="{{asset('assets/frontend/image/tunggak.png')}}" alt="" class="responsive-img gambar" style="margin-top:10px;">
                          @endif
                          </div>
                </div>
              </div>
            </div>
@endforeach

@endsection
