@extends('layouts.app')

@section('content')
        <img class="mt-12 rounded shadow-md" src="{{ asset('/img/valencian_flag.png')}}" alt="Valencian flag" style="width:30%">
        <h1 class="my-5 text-3xl sm:text-4xl font-semibold text-yellow-600">Hello from Valencia</h1>
        <p class="text-lg text-gray-800">It's currently {{ date('h:i A')}}.</p>
@endsection
