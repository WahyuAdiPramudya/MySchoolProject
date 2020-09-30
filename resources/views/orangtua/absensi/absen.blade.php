@extends('layouts.frontend.app')

@section('title','Dashboard')

@section('content')

@push('css')
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css' />
@endpush
<h3>Calendar</h3>
<div id='calendar'></div>
@endsection

@push('js')
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js'></script>
<script>
    $(document).ready(function() {
        // page is now ready, initialize the calendar...
        $('#calendar').fullCalendar({
            contentHeight: 550,
            // eventColor:'lightskyblue',
            // put your options and callbacks here
            events : [

            @foreach($absen as $s)
            {
                title : '{{ $s->status }}',
                start : '{{ $s->masuk }}',
                @if($s->status === 'hadir')
                   
                @elseif($s->status === 'alfa')
                    backgroundColor : 'red',
                @elseif($s->status === 'sakit')
                    backgroundColor : 'yellow',
                @else($s->status === 'izin')
                    backgroundColor : 'green',
                @endif
                url : ''
            },
            @endforeach
            ]
        })
    });
</script>
@endpush