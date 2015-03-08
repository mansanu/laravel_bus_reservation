@extends('app')
 
@section('content')
    <h2>Buses</h2>
 
    @if ( !$buses->count() )
        You have no buses
    @else
        <ul>
            @foreach( $buses as $bus )
                <li><a href="{{ route('buses.show', $bus->id) }}">{{ $bus->bus_reg_no }}</a></li>
            @endforeach
        </ul>
    @endif
@endsection