@extends('layouts.frontend.app')

@section('title','Dashboard')
@section('content')
Informasi
<div class="col s12">
    <div class="row">
        <div class="col s12">
            <div class="card">
                 <div class="card">
            <div class="carousel carousel-slider" style="height: 120px;">
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
    </div>
    menu
    <div class="">
        <div class="row" style="text-align:center; ">
            
            <div class="col s3">
                <div class="card" style=" margin-top:5px;">
                    <pre></pre>
                    <div style="border: 1px solid #04b3fc; padding:21px; margin:8px;   ">
                    <a href="/iuran_warga"><img src="{{asset('image/iuran.png')}}" alt="" class="responsive-img gambar"></a>
                </div>
            <small>Absen</small>
        </div>
    </div>
        <div class="col s3">
                <div class="card" style=" margin-top:5px;">
                <pre></pre>
                <div style="border: 1px solid #04b3fc; padding:21px; margin:8px;   ">
                <a href="/iuran_warga"><img src="{{asset('image/iuran.png')}}" alt="" class="responsive-img gambar"></a>
           </div>
          <small>Izin</small>
    </div>
</div>
      <div class="col s3">
              <div class="card" style=" margin-top:5px;">
              <pre></pre>
              <div style="border: 1px solid #04b3fc; padding:21px; margin:8px;   ">
              <a href="/iuran_warga"><img src="{{asset('image/iuran.png')}}" alt="" class="responsive-img gambar"></a>
            </div>
         <small>Sakit</small>
    </div>
</div>
    <div class="col s3">
            <div class="card" style="border-radius:20px; margin-top:5px;">
            <pre></pre>
            <div style="border: 1px solid #04b3fc; padding:21px; margin:8px; margin-bottom: 10px;  ">
            <a href="/iuran_warga"><img src="{{asset('image/iuran.png')}}" alt="" class="responsive-img gambar"></a>
        </div>
      <small>Info</small>
   </div>
</div>
    <div class="col s3">
            <div class="card" style="margin-top:5px;">
            <pre></pre>
            <div style="border: 1px solid #04b3fc; padding:21px; margin:8px; margin-bottom: 10px;  ">
            <a href="/iuran_warga"><img src="{{asset('image/iuran.png')}}" alt="" class="responsive-img gambar"></a>
         </div>
       <small>Nilai Tugas</small>
    </div>
</div>
    <div class="col s3">
            <div class="card" style=" margin-top:5px;">
            <pre></pre>
            <div style="border: 1px solid #04b3fc; padding:21px; margin:8px; margin-bottom: 10px;  ">
            <a href="/iuran_warga"><img src="{{asset('image/iuran.png')}}" alt="" class="responsive-img gambar"></a>
           </div>
        <small>Komunitas</small>
    </div>
</div>
    <div class="col s3">
            <div class="card" style=" margin-top:5px;">
            <pre></pre>
            <div style="border: 1px solid #04b3fc; padding:21px; margin:8px; margin-bottom: 10px;  ">
            <a href="/iuran_warga"><img src="{{asset('image/iuran.png')}}" alt="" class="responsive-img gambar"></a>
           </div>
        <small>Toko</small>
    </div>
</div>
    <div class="col s3">
            <div class="card" style=" margin-top:5px;">
            <pre></pre>
            <div style="border: 1px solid #04b3fc; padding:21px; margin:8px; margin-bottom: 10px;  ">
            <a href="/iuran_warga"><img src="{{asset('image/iuran.png')}}" alt="" class="responsive-img gambar"></a>
           </div>
        <small>Tagihan</small>
    </div>
</div>
    </div>
</div>&emsp;

<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script type="text/javascript">
    $('.carousel.carousel-slider').carousel({
        fullWidth: true
    });
</script>


@endsection