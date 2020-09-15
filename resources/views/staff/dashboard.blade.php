@extends('layouts.backend.app')

@section('title','dashboard')

@push('css')
 <link rel="stylesheet" href="{{ asset('assets/backend/assets/styles/vendor/perfect-scrollbar.css') }}">
@endpush

@section('content')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@include('sweet::alert')


@push('js')
 <script src="{{ asset('assets/backend/assets/js/carousel.script.js') }}"></script>

<script src="{{ asset('assets/backend/assets/js/sidebar.large.script.js') }}"></script>

@endpush
