
<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="BzK7adQuHIbffJgT3RdttqSBRUvuRzZUYxULgXLW">
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet">

    <link id="gull-theme" rel="stylesheet" href="{{ asset('assets/backend/assets/styles/css/themes/lite-purple.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/backend/assets/styles/vendor/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    @stack('css')
</head>


<body class="text-left">

    <!-- Pre Loader Strat  -->
    <div class='loadscreen' id="preloader">

      <div class="loader-bubble loader-bubble-primary "></div>


  </div>
  <!-- Pre Loader end  -->

  @include('layouts.backend.partial.topbar')
  <!-- header top menu end -->

  @include('layouts.backend.partial.sidebar') 
  <!--=============== Left side End ================-->            

  <!-- ============ Body content start ============= -->

  @yield('content')
  
  <script src="{{ asset('assets/backend/assets/js/common-bundle-script.js')}}"></script>
  <script src="{{ asset('assets/backend/assets/js/vendor/echarts.min.js')}}"></script>
  <script src="{{ asset('assets/backend/assets/js/es5/echart.options.min.js')}}"></script>
  <script src="{{ asset('assets/backend/assets/js/es5/dashboard.v1.script.js')}}"></script>
  <script src="{{ asset('assets/backend/assets/js/script.js')}}"></script>
  <script src="{{ asset('assets/backend/assets/js/sidebar.large.script.js')}}"></script>
  <script src="{{ asset('assets/backend/assets/js/customizer.script.js')}}"></script>
  
  <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
  <!-- Bootstrap JavaScript -->
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
  <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
  {!! Toastr::message() !!}
  <script>
    @if($errors->any())
    @foreach($errors->all() as $error)
    toastr.error('{{ $error }}','Error',{
        closebutton:true,
        progressBar:true,
    });
    @endforeach
    @endif
</script>
@stack('js')
</body>
</html>