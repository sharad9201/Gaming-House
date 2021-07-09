@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="content">
        <img src="/img/1.png" alt="logo of the game" >
        <div class="title m-b-md">
            <strong> Gameing House </strong>
        </div>
        <p class="message">{{ session('message')}}</p>
        <a href="/games/create">BUY</a>
    </div>
</div>
@endsection