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
                        <img src="{{asset('assets/frontend/image/orangtua.jpg')}}" style="border-radius: 50%;" class="responsive-img" >
                      </div>
                      <div class="col s1"></div>
                        <div class="col s7">
                          <p><b>{{ucwords(Auth::user()->nama_lengkap)}}</b>
                          <br><label>SMP Utama</label></p>
                        </div>
                    </div>
                   
                    <ul>
                      <li>
                        <h5>Email</h5>
                        <p>{{Auth::user()->email}}</p>
                      </li>
                      <li>
                        <h5>No.Telp</h5>
                        <p>{{Auth::user()->no_telp}}</p>
                      </li>
                      <li>
                        <h5>Email</h5>
                        <p>{{Auth::user()->email}}</p>
                      </li>
                    </ul>
                  
              </div>
            </div>
          </div>

        
@endsection