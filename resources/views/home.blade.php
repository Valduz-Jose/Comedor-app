@extends('layouts.plantilla')
@section('title', 'Home')

@section('content')
    <h1>Welcome to Home</h1>
    <a href="{{ Route('Regis') }}">Registros</a>
    <ul>
        @foreach ($comedore as $variable)
            <li> {{ $variable->name }} </li>
        @endforeach
    </ul>
    {{ $comedore->links() }}
@endsection()
