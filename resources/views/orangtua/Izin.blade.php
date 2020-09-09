@extends('layouts.frontend.app')

@section('title','Dashboard')
@section('content')

@push('css')
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
@endpush

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

                    <h5>Form Izin</h5>
                        <form>
                    <div class="col s12">
                        <div class="row">
                            <div class="input-field col s6">
                                <input type="text" id="input1" class="datepicker">
                                    <label for="input1">Dari Tanggal</label>
                            </div>
                            
                            <div class="input-field col s6">
                                 <input type="text" id="input2" class="datepicker">
                                 <label for="input2">Sampai Tanggal</label>
                            </div>
                        </div>

                      <div class="row">
                        <div class="input-field col s12">
                          <textarea id="textarea1" class="materialize-textarea"></textarea>
                          <label for="textarea1">Textarea</label>
                        </div>
                      </div>

                      <div class="row" style="
                        margin-top:40%;
                      ">
                          <div class="col s3 ">
                            <a href="/camera">
                              <img src="{{asset('assets/frontend/image/kamera.png')}}" class="responsive-img gambar">
                            </a>
                          </div>
                          <div class="col s3"></div>
                          <div class="col s3">
                                <button type="" class="btn btn-success">Kirim</button>
                          </div>
                      </div>
                  </div>

@push('js')
 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
@endpush
        
@endsection