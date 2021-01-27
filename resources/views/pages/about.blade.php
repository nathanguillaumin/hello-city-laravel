@extends('layouts.app', ['pageTitle' => 'About us'])

@section('content')
        <img class="mt-12" src="{{ asset('/img/nathan.svg')}}" alt="Avatar of Nathan" style="width:30%">
        <h2 class="my-5 text-gray-700">Built with <span class="text-pink-500">&hearts;</span> by Nathan.</h2>

        <p><a class="text-indigo-500 hover:text-indigo-600 underline" href={{ route('home') }}>Revenir à la page d'accueil</a></p>
@endsection
