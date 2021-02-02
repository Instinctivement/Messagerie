@extends('layouts/app', ['title' => 'Accueil'])

       


@section('content')

    <p>Accueil</p>

   

    <p><a href="{{ route('inscription') }}">Inscription</a></p>
    <p><a href="{{ route('login') }}">log</a></p>
@endsection