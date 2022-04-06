@extends('layout')

@section('content')
    <p>Ime korisnika: {{ $user->name }}</p>

    @if(\Illuminate\Support\Facades\Auth::user()->userType->user_type == 'zubar')

    <form action="{{ route('updateDentalRecord') }}" method="post">
        {{ csrf_field() }}

        <input type="hidden" value="{{ $user->id }}" name="user_id">

        <label>Trenutni zubi:</label>
       <input type="text" value="{{ $user->userDentalRecord->current_teeth }}" name="current_teeth" ><br>

        <label>Zubi koji nedostaju:</label>
       <input type="text" value="{{ $user->userDentalRecord->missing_teeth }}" name="missing_teeth"><br>

        <label>Beleske:</label>
       <input type="text" value="{{ $user->userDentalRecord->notes }}" name="notes"><br>
        <input type="submit" value="Submit">

    </form>

    @else

        <p>Trenutni zubi: {{ $user->userDentalRecord->current_teeth }}</p>
        <p>Zubi koji nedostaju: {{ $user->userDentalRecord->missing_teeth }}</p>
        <p>Beleske: {{ $user->userDentalRecord->notes }}</p>

    @endif






@endsection
