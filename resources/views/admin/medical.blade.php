@extends('layout')

@section('content')

    <h3>Medicinski karton</h3>

    <p>Ime korisnika:{{ $user->name }}</p>

    @if(\Illuminate\Support\Facades\Auth::user()->userType->user_type == 'zubar')

        <form method="post" action="{{ route('updateMedicalRecord') }}">

            {{ csrf_field() }}
            <input type="hidden" value="{{ $user->id }}" name="user_id">

            <label>Beleske:</label>
            <input type="text" name="notes" value="{{ $user->userMedicalRecord->notes }}"><br>
            <input type="submit" value="Submit">

        </form>

    @else

        <p>Beleske:</p>
        <p>{{ $user->userMedicalRecord->notes }}</p>

    @endif

    <p>Doktor:{{ $user->userMedicalRecord->doctor->name }}</p>

@endsection
