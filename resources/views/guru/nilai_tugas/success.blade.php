<html>

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>@yield('title')</title>
  <!--Import Google Icon Font-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="{{asset('assets/frontend/css/footer.css')}}" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css" media="screen,projection" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-alpha.4/css/materialize.min.css">

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <style>
    body {
      font-family: Comic Sans Pro FlipFont;
      display: flex;
      min-height: 100vh;
      flex-direction: column;
      background-image: url('{{ asset('assets/frontend/image/bg2.png') }}');
    }
    @media only screen and (min-width: 993px){
    nav a.button-collapse {
    display: block;
    }
}

    .siswa{
      color:black;
    }
    nav {
      background-color: #04b3fc;
      
    }
    .username{
      color: white;
      font-size: 20px;
    }

    nav .brand-logo {
      color: #fff;
    }

    .material-icons {
      color: #04b3fc;
    }

    main {
      flex: 1 0 auto;
    }

    .page-footer {
      background-color: #fff;
      color: #04b3fc;
    }

    #frow {

      margin-top: -10px !important;

    }

    .tabs .indicator {
      height: 5px;
      background-color: #04b3fc;

    }

    .tabs .tab a {
      color: #04b3fc;
    }

    .gambar {
      max-height: 5vh !important;
      max-width: 5vh !important;

    }
    .image{
      max-height:30vh !important;
      max-width: 30vh !important;
    }
    .label  {
      font-size:11px;
    }
    .list{
      width: 20px;
    }
.caps{
  background-color:white;
                height:70%;
                padding:10px;
                border-radius:10px;
                text-align:center;
                box-shadow:5px 5px 5px lightgrey;
                transition: 0.3s;
                padding:10px;
}
.caps:hover{
  border:2px solid grey;
  transform:scale(1.05);
}
.datepicker{
  border:2px solid grey;
}
.judul{
  font-weight: bold;
  color:black;
}
.berita:hover{
  border:1px solid #04b3fc;
  transform:scale(1);
}


  </style>
  <body>
<div class="cols 12" style="margin-top: -50px; text-align: center;">
<div class="row">
  <div class="col s12">
    <div class="row"></div>
    <div class="row"></div>
    <div class="row"></div>
    <div class="row"></div>
    <div class="row"></div>
    <div class="row"></div>
    <div class="row"></div>
    <div class="row"></div>
      <div class="row">
        <div class="col s1"></div>
        <div class="col s10" >
          <h5>Nilai sudah terkirim</h5>
           <a href="/guru"><img src="{{asset('assets/frontend/image/Succes.png')}}" class="responsive-img image" style=""></a>
          <h5>Terima Kasih!</h5>
        </div>
        <div class="col s1"></div>

      </div>
	</div>
</div>
</div>
</body>
 <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script type="text/javascript" src="{{ URL::to('/') }}offline_material/materalize.min.js"></script>
  <script>
        var d = new Date();
    document.getElementById("demo").innerHTML = d;
  </script>
  <script>
    $(document).ready(function(){
   $('.slider').slider();  
   $('.datepicker').datepicker();
    $('select').formSelect();
    $('.dropdown-trigger').dropdown(); 
    $('.carousel.carousel-slider').carousel({
    fullWidth: true
  });    
});
</script>
@stack('js')
</html>
