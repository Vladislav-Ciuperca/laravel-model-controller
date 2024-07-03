@extends('layouts.app')

@section('content')
    <h1>Dati da "config/data.php": {{ $store["home"] }}</h1>
    <p>This is my paragraph content.</p>
    <button >Cliccami</button>


    @foreach ($movies as $singleMovie)
        <p>{{$singleMovie ["title"]}}</p>
    @endforeach

@endsection
