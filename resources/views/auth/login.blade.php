<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<style type="text/css">
    body {
      display: flex;
      min-height: 100vh;
      flex-direction: column;
      background-image: url('{{ asset('assets/frontend/image/bg2.png') }}');
  }
  .rules{
    margin-top:50%; 
    width:100%;
    height: auto;
  }

  .image {
    width: 320px;
    height: 320px;
    padding-top: 50px;
    padding-bottom: 50px;
}

</style>
{!! Toastr::message() !!}
<title>Login</title>

<div class="rules container-sm">
<center>
  <img src="{{asset ('assets/frontend/image/COOLMYSH 2.png')}}" class="image img-fluid" alt="Responsive image">
</center>
        <div id="cover-caption">
            <div class="container">
                <div class=" col-lg-6 col-md-8 col-sm-10 mx-auto text-center form p-4">
                    <div class="px-2">
                        <form action="/postlogin" class="justify-content-center" method="post"> 
                            {{ csrf_field() }}
                            <div class="form-group{{ $errors->has('no_telp') ? ' has-error' : '' }} ">
                                <input type="number" class="form-control"  style="font-family: FontAwesome;"  name="no_telp" value="{{ old('no_telp') }}"  placeholder="&#xf10b Telp">
                                @if ($errors->has('no_telp'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('no_telp') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <input style="font-family: FontAwesome;" type="password" name="password" class="form-control" placeholder='&#xf023  Password'/>
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
    </div>
  
</div>
    
</center>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>