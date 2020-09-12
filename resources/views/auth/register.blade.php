<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<style type="text/css">
    body {
      display: flex;
      min-height: 100vh;
      flex-direction: column;
      background-image: url('{{ asset('assets/frontend/image/bg2.png') }}');
  }

  .image {
    width: 350px;
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
<title>Register</title>
<center>    
    <img src="{{asset ('assets/frontend/image/COOLMYSH 2.png')}}" class="image">
    <section id="cover" class="min-vh-100">
        <div id="cover-caption">
            <div class="container">
                <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto text-center form p-4">
                    <div class="px-2">
                        <form action="/register" method="post" class="justify-content-center"> 
                            {{ csrf_field() }}
                            <div class="form-group{{ $errors->has('nama_lengkap') ? ' has-error' : '' }}">
                                <input type="text" autocomplete="off" class="form-control" name="nama_lengkap" value="{{ old('nama_lengkap') }}"  placeholder="Masukan Nama Lengkap">
                                @if ($errors->has('nama_lengkap'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('nama_lengkap') }}</strong>
                                </span>
                                @endif
                            </div>
                             <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <input type="email" autocomplete="off" class="form-control" name="email" value="{{ old('email') }}"  placeholder="Masukan Nama Email">
                                @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('no_telp') ? ' has-error' : '' }}">
                                <input type="number" class="form-control" name="no_telp" value="{{ old('no_telp') }}" autocomplete="off"  placeholder="Masukan No Telp">
                                @if ($errors->has('no_telp'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('no_telp') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label class="sr-only">Password</label>
                                <input type="password" autocomplete="off" name="password" class="form-control" placeholder="Masukan Password">
                                @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                
                            <input type="hidden" name="status" value="disable">
                            <input type="hidden" name="role_id" value="4">
                            <div class="form-group{{ $errors->has('id_sekolah') ? 'has-error' : ''}}">
                                <select class="form-control" name="id_sekolah">
                                    <option>Nama Sekolah</option>
                                    @foreach($sekolah as $row)
                                        <option value="{{ $row->id_sekolah }}">
                                            {{ $row->nama_sekolah }}
                                        </option>
                                        @endforeach
                                </select>
                                 @if ($errors->has('id_sekolah'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('id_sekolah') }}</strong>
                                </span>
                                @endif
                            </div>
                            <!-- <div class="form-group{{ $errors->has('nisn_siswa') ? ' has-error ' : ''}}">
                                <select name="nisn_siswa" class="form-control">
                                    <option >Cari Nisn Siswa</option>
                                    
                                </select>
                                @if ($errors->has('nisn_siswa'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('nisn_siswa') }}</strong>
                                </span>
                                @endif
                            </div> -->
                            <div class="form-group">    
                                <input type="submit" class="form-control"  style="background-color: #00a1ff;" value="REGISTER">
                            </div>
                        </form>
                        <div class="form-group">  
                            <a class="btn btn-link" href="/login">Back To Login</a>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</center>