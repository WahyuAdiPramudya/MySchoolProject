
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

</head>


<body class="text-left">

    <!-- Pre Loader Strat  -->
    <div class='loadscreen' id="preloader">

      <div class="loader-bubble loader-bubble-primary "></div>


        </div>
    </div>
    <!-- Pre Loader end  -->

    @include('layouts.backend.partial.topbar')
    <!-- header top menu end -->

    @include('layouts.backend.partial.sidebar') 
    <!--=============== Left side End ================-->            

    <!-- ============ Body content start ============= -->
    <div class="main-content-wrap sidenav-open d-flex flex-column">
        <div class="main-content">
          
        @yield('content')

    </div>


</div>

</div>
</div>
</div>
<script src="{{ asset('assets/backend/assets/js/common-bundle-script.js')}}"></script>
<script src="{{ asset('assets/backend/assets/js/vendor/echarts.min.js')}}"></script>
<script src="{{ asset('assets/backend/assets/js/es5/echart.options.min.js')}}"></script>
<script src="{{ asset('assets/backend/assets/js/es5/dashboard.v1.script.js')}}"></script>
<script src="{{ asset('assets/backend/assets/js/script.js')}}"></script>
<script src="{{ asset('assets/backend/assets/js/sidebar.large.script.js')}}"></script>
<script src="{{ asset('assets/backend/assets/js/customizer.script.js')}}"></script>

</body>
</html>