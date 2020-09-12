<style type="text/css">
    body {
      display: flex;
      min-height: 100vh;
      flex-direction: column;
      background-image: url('{{ asset('assets/frontend/image/bg2.png') }}');
  }

  .image {
    width: 380px;
    height: 320px;
    padding-top: 40px;
    padding-bottom: 50px;
}
/*#cover {
    background: #222 url('https://unsplash.it/1920/1080/?random') center center no-repeat;
    background-size: cover;
    height: 100%;
    text-align: center;
    display: flex;
    align-items: center;
    position: relative;
}
*/
}

</style>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">


<title>Login</title>
<center>    
    <img src="{{asset ('assets/frontend/image/COOLMYSH 2.png')}}" class="image">
    <section id="cover" class="min-vh-100">
        <div id="cover-caption">
            <div class="container">
                <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto text-center form p-4">
                    <div class="px-2">
                        <form action="/postlogin" class="justify-content-center" method="post"> 
                            {{ csrf_field() }}
                            <div class="form-group{{ $errors->has('no_telp') ? ' has-error' : '' }}">
                                <input type="number" class="form-control" name="no_telp" value="{{ old('no_telp') }}"  placeholder="Masukan No Telp">
                                @if ($errors->has('no_telp'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('no_telp') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label class="sr-only">Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Masukan Password">
                                @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group ">    

                                <input type="submit" class="form-control"  style="background-color: #00a1ff;" value="LOGIN">
                            </div>

                        </form>
                        <div class="form-group">
                            <a href="/register" class="btn btn-link">Register</a>  
                            <a class="btn btn-link" href="">Lupa Password ?</a>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</center>

 <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
  <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>