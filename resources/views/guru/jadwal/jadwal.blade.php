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
                padding:30px;
                border-radius:10px;
                text-align:center;
                margin-top: -60px;
                ">
                <div class="row">
                <div class="col s1"></div>
                <div class="col s10">
                </div>
                <div class="col s1"></div>
                </div>
                  <div class="card" style="
                      background-color:#04b3fc;
                      color:black;
                      padding: 30px;
                      border-radius: 10px 10px 10px 10px;
                      margin-top: 50%;
                      margin-bottom: 60%;
                    ">  
                    
                      
                      <h5><a href="/Download/{{$jadwal->id_kelas}}" style="
                        color:black;
                      ">
                        Download Jadwal<br>Pelajaran
                      </a></h5>
                    </div>
              </div>
            </div>
@endsection