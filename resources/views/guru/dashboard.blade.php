@extends('layouts.frontend.app')

@section('title','Dashboard')
@section('content')
 <div class="col s12">
    <div class="row" style="margin-top:8px;">
        <div class="col s1">
        </div>
            <div class=" col s10" style="
                background-color:white;
                height:40%;
                padding:20px;
                border-radius:10px;
                margin-top: -50px;
                text-align:center;
                 box-shadow:10px 10px 5px grey;">
                
                <div class="row">
                     <div class="col s3">
                         <img src="/assets/logosekolah/SMPUtama.png" class="responsive-img gambar">
                     </div>
                     <div class="col s9">
                      {{ strtoupper($s->nama_sekolah)}}
                    </div>
                    
                </div>
            </div>
        <div class="col s1">
        </div>
    </div>
</div>

<h5>Pengingat</h5>
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
                    <a href="/getKelasAbsen"><img src="{{asset('assets/frontend/image/absen.png')}}" alt="" class="responsive-img gambar"></a>
                    </div>
                    <small>Absen</small>
                 </div>
            </div>
        <div class="col s3 icon">
            <div class="card" style=" margin-top:5px;">
                <div style="padding:25%; margin:8px;">
                <a href="/getKelasNilai"><img src="{{asset('assets/frontend/image/tugas.png')}}" alt="" class="responsive-img gambar"></a>
                </div>
          <small>Nilai Tugas</small>
            </div>
        </div>
      <div class="col s3 icon">
              <div class="card" style="margin-top:5px;">
              <div style="padding:25%; margin:8px;   ">
              <a href="/#"><img src="{{asset('assets/frontend/image/jadwal.png')}}" alt="" class="responsive-img gambar"></a>
            </div>
         <small>Jadwal</small>
    </div>
</div>
    <div class="col s3 icon">
            <div class="card" style="margin-top:5px;">
            <div style="padding:25%; margin:8px;">
            <a href="/guru/Listnilaiperkelas"><img src="{{asset('assets/frontend/image/data nilai.png')}}" alt="" class="responsive-img gambar"></a>
        </div>
      <small>Data Nilai</small>
   </div>
   <pre></pre>
</div>
    <div class="col s3 icon">
            <div class="card" style="margin-top:5px;">
            <div style="padding:25%; margin:8px;">
            <a href="/guru/Listabsenperkelas"><img src="{{asset('assets/frontend/image/absen.png')}}" alt="" class="responsive-img gambar"></a>
         </div>
       <small>Data Absen</small>
    </div>
</div>
    <div class="col s3 icon">
            <div class="card" style=" margin-top:5px;">
            <div style="padding:25%; margin:8px;">
            <a href="/iuran_warga"><img src="{{asset('assets/frontend/image/data siswa.png')}}" alt="" class="responsive-img gambar"></a>
           </div>
        <small>Data Siswa</small>
    </div>
</div>
    <div class="col s3 icon">
            <div class="card" style=" margin-top:5px;">
            <div style="padding:25%; margin:8px;">
            <a href="guru/listberita"><img src="{{asset('assets/frontend/image/info.png')}}" alt="" class="responsive-img gambar"></a>
           </div>
        <small>info</small>
    </div>
</div>
    <div class="col s3 icon">
            <div class="card" style=" margin-top:5px;">
            <div style="padding:25%; margin:8px;">
            <a href="/iuran_warga"><img src="{{asset('assets/frontend/image/komunitas.png')}}" alt="" class="responsive-img gambar"></a>
           </div>
        <small>komunitas</small>
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