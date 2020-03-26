@extends('layouts.layout')

@section('content')
    

        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content"> 
                <img src="/img/pizza-logo.jpg" alt="pizza logo">
                <div class="title m-b-md">
                   The North's best pizza
                </div>
            <p class="mssg">{{session('mssg')}}</p> {{-- passing data from the redirect and displaying data to view  --}}
                <a href="/pizzas/create">Order a Pizza</a>

                
            </div>
        </div>
        @endsection
  