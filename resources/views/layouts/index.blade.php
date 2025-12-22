@extends('layouts.layout')
@section('style')
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
@endsection
@section('content_layout')
    @include('layouts.header')
    @include('layouts.sidebar')
    <div class="main-content ">
        @yield('content')
    </div>
    @include('layouts.footer')
@endsection
@section('script')
    <!-- Custom JS -->
    <script src="{{ asset('js/welcome.js') }}"></script>
@endsection
