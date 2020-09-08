@extends('layouts.frontend.app')

@section('title','Dashboard')
@section('content')



<div class="col s12 ">
              <div class="row" style="">
              <div class="col s1">
              	<!---Grid-->
              </div>
              
                <div class="col s10" 
                style="
                background-color:white;
                height:60%;
                padding:20px;
                border-radius:10px;
                text-align:center;
                margin-top: -100px;
                ">

                	<div class="col s12">
                		<div class="row">
                    <div class="col s1"></div>
                    <div class="col s5">
                    <img src="{{asset('img.jpg')}}" style=" border: 5px solid #555;" alt="Avatar" class="responsive-img img" >
                    </div>
	                	<div class="col s5">
	              		<h4>{{$a->nama}}</h4>
                    @foreach($kelas as $k)
                      @if($k->kelas_id == $a->kelas_id)
	              			<h6>{{$k->nama_kelas}}</h6>
                      @endif
                    @endforeach
                    @foreach($sekolah as $s)
                      @if($s->id_sekolah == $a->sekolah_id)
                    <h6 for="">{{$s->nama_sekolah}}</h6>
                    @endif
                    @endforeach
                      </div>
                      <div class="col s1"></div>
                		</div>
                	</div> 
                  <div class="col s12">
                    <div class="row">
                        <div class="col s6">
                          <h4>Alamat</h4>
                          <label for="">{{$a->alamat}}</label>

                          <h4>Agama</h4>
                          <label for="">{{$a->agama}}</label>  

                          <h4>Wali</h4>        
                          <label for="">{{$a->nama_ayah}}</label> 

                          <h4></h4>             
                        </div>
                    </div>
                  </div>
                </div>
                <div class="col s1">
              		<!---Grid-->
              </div>
              </div>
            </div>
        
@endsection