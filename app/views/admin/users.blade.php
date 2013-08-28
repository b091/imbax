@extends('layout')

@section('content')
    @foreach($users as $user)
        <p> login:{{ $user->username }} email: {{ $user->email }}</p>
    @endforeach
@stop