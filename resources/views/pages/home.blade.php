@extends('app')

@section('title', config('app.name'))

@section('content')
        <img src="{{ asset('/img/valencian_flag.png')}}" alt="Valencian flag" style="width:30%">
        <h1>Hello from Valencia</h1>
        <p>It's currently {{ date('h:i A')}}.</p>
@endsection
