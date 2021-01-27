@extends('app')

@section('title', 'Hello City')

@section('content')
        <h1>Hello from Valencia</h1>
        <p>It's currently {{ date('h:i A')}}.</p>
@endsection
