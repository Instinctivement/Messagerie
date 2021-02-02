@extends('layouts/app', ['title' => 'Connexion'])

       


@section('content')

    <p>Loging page</p>



    <p><a href="{{ route('inscription') }}">Inscription</a></p>
    <p><a href="{{ route('accueil') }}">accueil</a></p>

@endsection
 