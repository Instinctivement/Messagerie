@extends('layouts/app', ['title' => 'Inscription'])



@section('content')

    <p>register page</p>


    <p><a href="{{ route('login') }}">log</a></p>
    <p><a href="{{ route('accueil') }}">Accueil</a></p>

    

    <p><a href="{{ route('inscription') }}">Inscription</a></p>
    <p><a href="{{ route('accueil') }}">accueil</a></p>

@endsection 