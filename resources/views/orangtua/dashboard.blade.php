@extends('layouts.frontend.app')

@section('title','Dashboard')
@section('content')
 <div class="col s12">
              <div class="row" style="">
              <div class="col s1">
              </div>
                <div class=" col s10" style="
                background-color:white;
                height:60%;
                padding:20px;
                border-radius:10px;
                margin-top: -50px;
                text-align:center;
                box-shadow:10px 10px 5px grey;">
                          <div class="col s3">
                                <img src="{{asset('assets/frontend/image/sakitdata.png')}}" alt="" class="responsive-img gambar">
                                <label class="label" for="">Absen Sakit</label>
                          </div>
                          <div class="col s3">
                               <img src="{{asset('assets/frontend/image/izin data.png')}}" alt="" class="responsive-img gambar"> 
                               <label class="label" for="">Absen Izin</label>
                          </div>
                          <div class="col s3">
                                <img src="{{asset('assets/frontend/image/alfa.png')}}" alt="" class="responsive-img gambar">
                                <label class="label" for="">Alfa</label>
                          </div>
                          <div class="col s3">
                                <img src="{{asset('assets/frontend/image/tugas.png')}}" alt="" class="responsive-img gambar">
                                <label class="label" for=""> Rata-rata Nilai </label>
                          </div>
                </div>
                <div class="col s1">
              </div>
              </div>
            </div>
<h5 >Informasi</h5>
<div class="col s12">
    <div class="row">
            <div class="carousel carousel-slider" style="height: 220px; border-radius:20px;">
                <div class="slider fullscreen">
                    <ul class="slides">
                        <li>
                        <img src="{{asset('image/rtrw.jpg')}}"> <!-- random image -->
                        <div class="caption center-align">
                            <h3>Selamat Datang </h3>
                            <h5 class="light grey-text text-lighten-5">Di RTRWTERPADU.NET</h5>
                        </div>
                        </li>
                        <li>
                        <img src="{{asset('image/iuran.jpg')}}"> <!-- random image -->
                        <div class="caption left-align">
                            <h3>Iuran Warga</h3>
                            <h5 class="light grey-text text-lighten-3">Jadi Lebih Mudah</h5>
                        </div>
                        </li>
                        <li>
                        <img src="{{asset('image/tong-tong.jpg')}}"> <!-- random image -->
                        <div class="caption right-align">
                            <h3>Klik Tong Tong</h3>
                            <h5 class="light grey-text text-lighten-3">Mengintegrasi Seluruh Warga</h5>
                        </div>
                        </li>
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
                    <a href="/iuran_warga"><img src="{{asset('assets/frontend/image/absen.png')}}" alt="" class="responsive-img gambar"></a>
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
              <a href="/orangtua/sakit"><img src="{{asset('assets/frontend/image/sakit.png')}}" alt="" class="responsive-img gambar"></a>
            </div>
         <small>Sakit</small>
    </div>
</div>
    <div class="col s3 icon">
            <div class="card" style="margin-top:5px;">
            <div style="padding:25%; margin:8px;">
            <a href="/orangtua/listberita"><img src="{{asset('assets/frontend/image/info.png')}}" alt="" class="responsive-img gambar"></a>
        </div>
      <small>Info</small>
   </div>
   <pre></pre>
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
    <div class="col s3 icon">
            <div class="card" style=" margin-top:5px;">
            <div style="padding:25%; margin:8px;">
            <a href="/iuran_warga"><img src="{{asset('assets/frontend/image/tagihan.png')}}" alt="" class="responsive-img gambar"></a>
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