@extends('layout')

@section('content')

    <p>Ime korisnika:{{ $user->name }}</p>
    <p>Beleske doktora:{{ $user->userMedicalRecord->notes }}</p>
    <p>Doktor:{{ $user->userMedicalRecord->doctor->name }}</p>

@endsection
