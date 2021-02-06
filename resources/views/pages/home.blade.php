@extends('layouts/app', ['title' => 'Accueil'])

       
@section('content')

    <div class="wrapper">
        <!-- Sidebar  -->
        @include('pages.sidebar', ['status' => 'complete'])
       
        <!-- Page Content  -->
        <div class="app" id="content">
            <!-- Page header  -->
            @include('pages.header', ['status' => 'complete'])
            <div class="wrapper">
                <!-- Left side  -->
                @include('pages.left', ['status' => 'complete'])
                <!-- Floting action button  -->
                @include('pages.floatingActionButton', ['status' => 'complete'])
                
                <!-- Center side  -->
                @include('pages.center', ['status' => 'complete'])
                <!-- Right side  -->
                @include('pages.right', ['status' => 'complete'])
           </div>
        </div>
    </div>

    <div class="overlay"></div>

    @include('modals.theme', ['status' => 'complete'])

@endsection