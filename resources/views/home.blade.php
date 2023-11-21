<!-- resources/views/home.blade.php -->

@extends('layouts.app')

@section('title', __('messages.homePage'))

@section('content')

    {{-- css --}}
    <style>
        .card{
            margin: 5%;
            text-align: center;
        }
        #lottie-container {
        width: 60%;
        margin: 0 auto;
        padding: 0 20%;
        }
    </style>

    {{-- content --}}
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">@lang('messages.title')</h5>
            <p class="card-text">@lang('messages.subtitle')</p>
        </div>
    </div>

    {{-- lottie --}}
    <div id="lottie-container"></div>

    {{-- js --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.8/lottie.min.js"></script>
    <script>
    var animation = bodymovin.loadAnimation({
        container: document.getElementById('lottie-container'),
        renderer: 'svg',
        loop: true,
        autoplay: true,
        path: '{{ asset('images/home.json') }}',
    });
    </script>

@endsection
