@extends('layouts.layout')
@section('content')
    

<div class="wrapper pizza-details">
<h1>Order for {{ $pizza->name }}</h1>
<p class="type">Type -{{$pizza->type}}</p>
<p class="base">Base -{{$pizza->base}}</p>

</div>

<a href="/pizzas" class="back"><- Back to all pizzas</a>

          

         {{--    @for($i=0; $i<count($pizzas);$i++)
            <p>{{$pizzas[$i]['type']}}</p>
            @endfor --}}

           {{--  @php
                $name="Sandesh";
                echo($name);
            @endphp  --}}

            
           
        @endsection