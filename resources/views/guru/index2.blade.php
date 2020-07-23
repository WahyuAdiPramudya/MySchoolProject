@extends('layouts.frontend.app')

@section('title','Dashboard')
@section('content')
Informasi
<div class="col s12">
    <div class="row">
             <div class="carousel carousel-slider">
                <a class="carousel-item" href="#one!"><img src="https://lorempixel.com/800/400/food/1"></a>
                <a class="carousel-item" href="#two!"><img src="https://lorempixel.com/800/400/food/2"></a>
                <a class="carousel-item" href="#three!"><img src="https://lorempixel.com/800/400/food/3"></a>
                <a class="carousel-item" href="#four!"><img src="https://lorempixel.com/800/400/food/4"></a>
          </div>
        </div>
    </div>
    menu
    <div class="col s12">
        <div class="row" style="text-align:center; ">
            <div class="col s3">
                <div class="card" style=" margin-top:5px;">
                    <div style="padding:25%; margin:8px;   ">
                    <a href="/iuran_warga"><img src="{{asset('assets/frontend/image/absen.png')}}" alt="" class="responsive-img gambar"></a>
                    </div>
                    <small>Absen</small>
                 </div>
            </div>
        <div class="col s3">
            <div class="card" style=" margin-top:5px;">
                <div style="padding:25%; margin:8px;">
                <a href="/iuran_warga"><img src="{{asset('assets/frontend/image/izin.png')}}" alt="" class="responsive-img gambar"></a>
                </div>
          <small>Izin</small>
            </div>
        </div>
      <div class="col s3">
              <div class="card" style="margin-top:5px;">
              <div style="padding:25%; margin:8px;   ">
              <a href="/iuran_warga"><img src="{{asset('assets/frontend/image/sakit.png')}}" alt="" class="responsive-img gambar"></a>
            </div>
         <small>Sakit</small>
    </div>
</div>
    <div class="col s3">
            <div class="card" style="margin-top:5px;">
            <div style="padding:25%; margin:8px;">
            <a href="/iuran_warga"><img src="{{asset('assets/frontend/image/info.png')}}" alt="" class="responsive-img gambar"></a>
        </div>
      <small>Info</small>
   </div>
   <pre></pre>
</div>
    <div class="col s3">
            <div class="card" style="margin-top:5px;">
            <div style="padding:25%; margin:8px;">
            <a href="/iuran_warga"><img src="{{asset('assets/frontend/image/tugas.png')}}" alt="" class="responsive-img gambar"></a>
         </div>
       <small>Nilai Tugas</small>
    </div>
</div>
    <div class="col s3">
            <div class="card" style=" margin-top:5px;">
            <div style="padding:25%; margin:8px;">
            <a href="/iuran_warga"><img src="{{asset('assets/frontend/image/non.png')}}" alt="" class="responsive-img gambar"></a>
           </div>
        <small>Komunitas</small>
    </div>
</div>
    <div class="col s3">
            <div class="card" style=" margin-top:5px;">
            <div style="padding:25%; margin:8px;">
            <a href="/iuran_warga"><img src="{{asset('assets/frontend/image/non.png')}}" alt="" class="responsive-img gambar"></a>
           </div>
        <small>Toko</small>
    </div>
</div>
    <div class="col s3">
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