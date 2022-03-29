@extends('layout')

@section('content')

    @foreach($users as $user)
{{--    {{$user}}--}}
        <p>{{$user->name}}</p>
        <p>{{$user->email}}</p>
        <p>{{$user->userType->user_type}}</p>
    @endforeach

@endsection
