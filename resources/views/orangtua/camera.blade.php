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
                        <video id="video"  autoplay class="image"></video>
                        <button id="snap">Snap Photo</button>
                        <canvas id="canvas" width="640" height="480"></canvas>
                      </div>
                  </div>



        
@endsection

@push('js')
 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
 <script>
     // Grab elements, create settings, etc.
var video = document.getElementById('video');

// Get access to the camera!
if(navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
    // Not adding `{ audio: true }` since we only want video now
    navigator.mediaDevices.getUserMedia({ video: true }).then(function(stream) {
        //video.src = window.URL.createObjectURL(stream);
        video.srcObject = stream;
        video.play();
    });
}

var canvas = document.getElementById('canvas');
var context = canvas.getContext('2d');
var video = document.getElementById('video');

// Trigger photo take
document.getElementById("snap").addEventListener("click", function() {
    context.drawImage(video, 0, 0, 640, 480);
});
 </script>
 
@endpush