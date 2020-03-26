@extends('layouts.layout')
@section('content')
    


        <div class="flex-center position-ref full-height">
       

            <div class="content">
                <div class="title m-b-md">
                    Pizzas List
                </div>

            <p>{{$name}} Age {{$age}}</p>
           

          

         {{--    @for($i=0; $i<count($pizzas);$i++)
            <p>{{$pizzas[$i]['type']}}</p>
            @endfor --}}

           {{--  @php
                $name="Sandesh";
                echo($name);
            @endphp  --}}

            @foreach($pizzas as $pizza)
                <div>
                    {{ $loop->index }} {{ $pizza['type'] }} - {{ $pizza['base'] }}

                    @if($loop->first)
                        <span>-First loop item</span>  {{-- displaying at the loop first item --}}
                    @endif

                    @if($loop->last)
                    <span>-Last loop item</span>  {{-- displaying at the loop last item --}}
                    @endif
                </div>

            @endforeach

            </div>
        </div>
        @endsection