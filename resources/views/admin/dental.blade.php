@extends('layout')

@section('content')
    <p>Ime korisnika: {{ $user->name }}</p>

    <form action="{{ route('updateDentalRecord') }}" method="post">
        {{ csrf_field() }}

        <input type="hidden" value="{{ $user->id }}" name="user_id">
       <input type="text" value="{{ $user->userDentalRecord->current_teeth }}" name="current_teeth" >
       <input type="text" value="{{ $user->userDentalRecord->missing_teeth }}" name="missing_teeth">
       <input type="text" value="{{ $user->userDentalRecord->notes }}" name="notes">
        <input type="submit" value="Submit">
    </form>



@endsection
