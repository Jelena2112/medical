@extends('layout')

@section('content')

    <p>Ime korisnika:{{ $user->name }}</p>

    <form method="post" action="{{ route('updateMedicalRecord') }}">

        {{ csrf_field() }}
        <input type="hidden" value="{{ $user->id }}" name="user_id">
       <input type="text" name="notes" value="{{ $user->userMedicalRecord->notes }}">
        <input type="submit" value="Submit">

    </form>
    <p>Doktor:{{ $user->userMedicalRecord->doctor->name }}</p>

@endsection
