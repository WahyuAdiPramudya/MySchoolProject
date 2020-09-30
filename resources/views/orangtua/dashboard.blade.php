@extends('layouts.frontend.app')

@section('title','Dashboard')
@section('content')
 <div class="col s12">
              <div class="row" style="">
                <div class=" col s12" style="
                background-color:white;
                height:60%;
                padding:20px;
                border-radius:10px;
                margin-top: -50px;
                text-align:center;
                box-shadow:2px 2px 2px grey;">
                          <div class="col s3">
                                <img src="{{asset('assets/frontend/image/sakitdata.png')}}" alt="" class="responsive-img gambar">
                                <label class="label" for="">{{$col1}}</label>
                          </div>
                          <div class="col s3">
                               <img src="{{asset('assets/frontend/image/izin data.png')}}" alt="" class="responsive-img gambar"> 
                               <label class="label" for="">{{$col2}}</label>
                          </div>
                          <div class="col s3">
                                <img src="{{asset('assets/frontend/image/alfa.png')}}" alt="" class="responsive-img gambar">
                                <label class="label" for="">{{$col3}}</label>
                          </div>
                          <div class="col s3">
                                <img src="{{asset('assets/frontend/image/data nilai.png')}}" alt="" class="responsive-img gambar">
                                <label class="label" for=""></label>
                          </div>
                </div>
              </div>
            </div>
<h5 >Informasi</h5>
<div class="col s12">
    <div class="row">
            <div class="carousel carousel-slider" style="height: 220px; border-radius:20px;">
                <div class="slider fullscreen">
                    <ul class="slides">
                      @foreach($slider as $slide)
                        <li>
                        <img src="images/{{$slide->image}}"> <!-- random image -->
                        <div class="caption center-align">
                            <h3>{{$slide->title}}</h3>
                            <h5 class="light grey-text text-lighten-5">{{$slide->description}}</h5>
                        </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <h5>Menu</h5>
    <div class="col s12">
        <div class="row" style="text-align:center; ">
            <div class="col s3 icon">
                <div class="card" style=" margin-top:5px;">
                    <div style="padding:25%; margin:8px;   ">
                    <a href="/orangtua/listabsen/{{Auth::user()->id}}"><img src="{{asset('assets/frontend/image/absen.png')}}" alt="" class="responsive-img gambar"></a>
                    </div>
                    <small>Absen</small>
                 </div>
            </div>
            <div class="col s3 icon">
              <div class="card" style=" margin-top:5px;">
                  <div style="padding:25%; margin:8px;">
                  <a href="/orangtua/izin"><img src="{{asset('assets/frontend/image/izin.png')}}" alt="" class="responsive-img gambar"></a>
                  </div>
                    <small>Izin</small>
              </div>
            </div>
            <div class="col s3 icon">
              <div class="card" style="margin-top:5px;">
                  <div style="padding:25%; margin:8px;   ">
                  <a href="/orangtua/sakit"><img src="{{asset('assets/frontend/image/sakit.png')}}"class="responsive-img gambar"></a>
                  </div>
         <small>Sakit</small>
    </div>
</div>
<div class="col s3 icon">
                <div class="card" style=" margin-top:5px;">
                    <div style="padding:25%; margin:8px;   ">
                    <a href="/orangtua/absenrumah"><img src="{{asset('assets/frontend/image/absen dari rumah.png')}}" alt="" class="responsive-img gambar"></a>
                    </div>
                    <small>Absen dirumah</small>
                 </div>
            </div>
</div>
<div class="row" style="text-align:center; ">
    <div class="col s3 icon">
            <div class="card" style="margin-top:5px;">
            <div style="padding:25%; margin:8px;">
            <a href="/orangtua/listberita"><img src="{{asset('assets/frontend/image/info.png')}}" alt="" class="responsive-img gambar"></a>
        </div>
      <small>Info</small>
   </div>
</div>
    <div class="col s3 icon">
            <div class="card" style="margin-top:5px;">
            <div style="padding:25%; margin:8px;">
            <a href="/orangtua/datanilai"><img src="{{asset('assets/frontend/image/tugas.png')}}" alt="" class="responsive-img gambar"></a>
         </div>
       <small>Nilai Tugas</small>
    </div>
</div>
    <div class="col s3 icon">
            <div class="card" style=" margin-top:5px;">
            <div style="padding:25%; margin:8px;">
            <a href="/iuran_warga"><img src="{{asset('assets/frontend/image/komunitas.png')}}" alt="" class="responsive-img gambar"></a>
           </div>
        <small>Komunitas</small>
    </div>
</div>
    <div class="col s3 icon">
            <div class="card" style=" margin-top:5px;">
            <div style="padding:25%; margin:8px;">
            <a href="/iuran_warga"><img src="{{asset('assets/frontend/image/toko.png')}}" alt="" class="responsive-img gambar"></a>
           </div>
        <small>Toko</small>
    </div>
</div>
</div>
  <div class="row" style="text-align:center;">
    <div class="col s3 icon">
            <div class="card" style=" margin-top:5px;">
            <div style="padding:25%; margin:8px;">
            <a href="/orangtua/tagihan"><img src="{{asset('assets/frontend/image/tagihan.png')}}" alt="" class="responsive-img gambar"></a>
           </div>
        <small>Tagihan</small>
    		</div>
	</div>
</div>
</div>
</div>

&emsp;

<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script type="text/javascript">
    $('.carousel.carousel-slider').carousel({
        fullWidth: true
    });
</script>


@endsection