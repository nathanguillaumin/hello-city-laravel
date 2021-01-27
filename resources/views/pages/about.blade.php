@extends('app')

@section('title', 'About us | ' . config('app.name'))

@section('content')
        <img src="{{ asset('/img/nathan.svg')}}" alt="Avatar of Nathan" style="width:30%">
        <p>Built with &hearts; by Nathan.</p>

        <p><a href={{ route('home') }}>Revenir à la page d'accueil</a></p>
@endsection
