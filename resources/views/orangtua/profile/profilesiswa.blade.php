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
                margin-top: -100px;
                ">

                 
                    <div class="row">
                      <div class="col s4">
                        <img src="{{asset('assets/frontend/image/siswa.png')}}" style="border-radius: 50%;" class="responsive-img" >
                      </div>
                      <div class="col s1"></div>
                        <div class="col s7">
                          <p><b>{{ucwords($a->nama)}}</b>
                        </div>
                    </div>
                   <hr>
                    <ul>
                      <li>
                        <h5>NISN</h5>
                        <p>{{$a->nisn}}</p>
                      </li>
                      <li>
                        <h5>No.Telp Wali Orang Tua</h5>
                        <p>{{Auth::user()->no_telp}}</p>
                      </li>
                      <li>
                        <h5>Agama</h5>
                        <p>{{$a->agama}}</p>
                      </li>
                       <li>
                        <h5>Alamat</h5>
                        <p>{{$a->alamat}}</p>
                      </li>
                       <li>
                        <h5>Nama Ayah</h5>
                        <p>{{$a->nama_ayah}}</p>
                      </li>
                       <li>
                        <h5>Nama Ibu</h5>
                        <p>{{$a->nama_ibu}}</p>
                      </li>
                    </ul>
                  
              </div>
            </div>
          </div>

        
@endsection